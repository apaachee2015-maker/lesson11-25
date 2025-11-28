<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use HasFactory;

    public function index()
    {


//    $post = Post::find(2);
//
//   dd($post->category);


   return view('post.index', compact('posts'));


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
      return view('post.create');

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
//        dd($post->title);
        return view('post.edit', compact('post'));

    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);

        $post->update($data);
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
            ['title' => 'Whole Entire Content' ],

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
