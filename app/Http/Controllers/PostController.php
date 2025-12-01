<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use HasFactory;

    public function index()
    {

        $posts = Post::all();

        return view('post.index', compact('posts'));

//        $category = category::find(1);
//        $post = Post::find(1);
//        $tag = Tag::find(1);
//        dd($tag->posts);

//        dd($category->posts);
//        $posts = Post::where('category_id', $category->id)->get();
//        dd($posts);


//    $post = Post::find(1);
//
//   dd($post->category);


    }


//    public function index()
//    {
//        $posts = Post::where('title',0)->get();
//        foreach ($posts as $post)
//        dump($post->title);
//
//       return dd('end');
//    }

    public function create()
    {

        $categories = category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

       $tags = $data['tags'];
       unset($data['tags']);
//        dd($tags, $data);

       $post = Post::create($data);

       $post->tags()->attach($tags);
//       foreach ($tags as $tag) {
//
//       PostTag::firstOrcreate([
//        'tag_id' => $tag,
//           'post_id' => $post->id,
//       ]);
//
//       }

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));

//        dd($post->title);
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',

        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd('deletedNoww');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrcreate()
    {

        $anotherpost = [
            'title' => 'some post',
            'content' => 'Some cont',
            'image' => 'image.jpg',
            'likes' => 5000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate(
            ['title' => 'Whole Entire Content'],

            [
                'title' => 'Whole Entire Content',
                'content' => 'Some content AAAA',
                'image' => 'image.jpg',
                'likes' => 5000,
                'is_published' => 1,
            ]
        );

        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherpost = [
            'title' => 'UpdateOrCreate Some Post',
            'content' => 'UpdateOrCreate Some cont',
            'image' => 'image.jpg',
            'likes' => 498,
            'is_published' => 0
        ];
        $post = Post::updateOrCreate(
            ['title' => 'from phpstorm'],

            [
                'title' => 'from phpstorm',
                'content' => 'Updated one more time',
                'image' => 'image.jpg',
                'likes' => 498,
                'is_published' => 0
            ]);
        dump($post->content);
        dd('222222');
    }

}
