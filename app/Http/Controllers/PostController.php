<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use HasFactory;

        public function index()
        {
            $posts = Post::all();

           return view('posts', compact('posts'));
        }
                public function create()
        {
            $postsArr = [
                [
                    'title' => 'some title',
                    'content' => 'some content',
                    'image' => 'some image post',
                    'likes' => 76,
                    'is_published' => 1,
                ],
                [
                    'title' => 'another title',
                    'content' => 'another content',
                    'image' => 'ssome image post',
                    'likes' => 45,
                    'is_published' => 1,
                ],
                [
                    'title' => '2 another some title',
                    'content' => '2 another some content',
                    'image' => '2 image post',
                    'likes' => 34,
                    'is_published' => 0,
                ],
                [
                    'title' => '3 another some title',
                    'content' => '3 another some content',
                    'image' => '3 image post',
                    'likes' => 12,
                    'is_published' => 1,
                ],
                [
                    'title' => '4  another some title',
                    'content' => '4  another some content',
                    'image' => '4 image post',
                    'likes' => 42,
                    'is_published' => 1,
                ],
                [
                    'title' => '5 another some title',
                    'content' => '5 another some content',
                    'image' => '5 image post',
                    'likes' => 56,
                    'is_published' => 1,
                ],

            ];

            foreach ($postsArr as $item){


                Post::create($item);
            }
                dd('created');
        }

        public function update() {

            $post = Post::find(6);

            $post->update([
                'title' => '6 updated some title',
                'content' => '6 updated some content',
                'image' => '15 updated image post',
                'likes' => 65,
                'is_published' => 1,
            ]);
            dd($post->image);
        }

        public function delete() {
            $post = Post::withTrashed()->find(7);
            $post->restore();
            dd('$post->title');
        }

        public function firstOrCreate() {


           $anotherpost = [
               'title' => 'some title',
               'content' => 'some content',
               'image' => 'some image post',
               'likes' => 76,
               'is_published' => 1,

           ];

           $post = Post::firstOrCreate(
               [
                   'title' => 'somewooow title',
               ],

               [
               'title' => 'wow some title',
               'content' => 'wow some content',
               'image' => 'Awesome image post',
               'likes' => 96,
               'is_published' => 1,
           ]);

           dump($post->content);

            dd('finished');
        }

    public function updateOrCreate()
    {
        $anotherpost = [
            'title' => 'Updatedsome title',
            'content' => 'Updatedsome content',
            'image' => 'Updatedsome image post',
            'likes' => 101,
            'is_published' => 0,

        ];


        $post = Post::updateOrcreate(
            ['title' => '6 some title'],

            [
            'title' => '1116 some title',
            'content' => '11Updatedsome content',
            'image' => '111 image post',
            'likes' => 99,
            'is_published' => 1,
        ]);

        dd('Updated');
    }

}




//
//    public function index()
//    {

////        $posts = Post::all();
//
//        return view('post.index', compact('posts'));
//
////        $category = category::find(1);
////        $post = Post::find(1);
////        $tag = Tag::find(1);
////        dd($tag->posts);
//
////        dd($category->posts);
////        $posts = Post::where('category_id', $category->id)->get();
////        dd($posts);
//
//
////    $post = Post::find(1);
////
////   dd($post->category);
//
//
//    }
//
//
////    public function index()
////    {
////        $posts = Post::where('title',0)->get();
////        foreach ($posts as $post)
////        dump($post->title);
////
////       return dd('end');
////    }
//
//    public function create()
//    {
//
//        $categories = category::all();
//        $tags = Tag::all();
//        return view('post.create', compact('categories', 'tags'));
//
//    }
//
//    public function store()
//    {
//        $data = request()->validate([
//            'title' => 'required|string',
//            'content' => 'string',
//            'image' => 'string',
//            'category_id' => '',
//            'tags' => '',
//        ]);
//
//       $tags = $data['tags'];
//       unset($data['tags']);
////        dd($tags, $data);
//
//       $post = Post::create($data);
//
//       $post->tags()->attach($tags);
////       foreach ($tags as $tag) {
////
////       PostTag::firstOrcreate([
////        'tag_id' => $tag,
////           'post_id' => $post->id,
////       ]);
////
////       }
//
//        return redirect()->route('post.index');
//    }
//
//    public function show(Post $post)
//    {
//
//        return view('post.show', compact('post'));
//    }
//
//    public function edit(Post $post)
//    {
//        $categories = category::all();
//        $tags = Tag::all();
//        return view('post.edit', compact('post', 'categories', 'tags'));
//
////        dd($post->title);
//    }
//
//    public function update(Post $post)
//    {
//        $data = request()->validate([
//            'title' => 'string',
//            'content' => 'string',
//            'image' => 'string',
//            'category_id' => '',
//            'tags' => '',
//
//        ]);
//
//        $tags = $data['tags'];
//        unset($data['tags']);
//
//        $post->update($data);
//        $post->tags()->sync($tags);
//        return redirect()->route('post.show', $post->id);
//    }
//
//    public function delete()
//    {
//        $post = Post::withTrashed()->find(1);
//        $post->restore();
//        dd('deletedNoww');
//    }
//
//    public function destroy(Post $post)
//    {
//        $post->delete();
//        return redirect()->route('post.index');
//    }
//
//    public function firstOrcreate()
//    {
//
//        $anotherpost = [
//            'title' => 'some post',
//            'content' => 'Some cont',
//            'image' => 'image.jpg',
//            'likes' => 5000,
//            'is_published' => 1,
//        ];
//
//        $post = Post::firstOrCreate(
//            ['title' => 'Whole Entire Content'],
//
//            [
//                'title' => 'Whole Entire Content',
//                'content' => 'Some content AAAA',
//                'image' => 'image.jpg',
//                'likes' => 5000,
//                'is_published' => 1,
//            ]
//        );
//
//        dump($post->content);
//        dd('finished');
//    }
//
//    public function updateOrCreate()
//    {
//        $anotherpost = [
//            'title' => 'UpdateOrCreate Some Post',
//            'content' => 'UpdateOrCreate Some cont',
//            'image' => 'image.jpg',
//            'likes' => 498,
//            'is_published' => 0
//        ];
//        $post = Post::updateOrCreate(
//            ['title' => 'from phpstorm'],
//
//            [
//                'title' => 'from phpstorm',
//                'content' => 'Updated one more time',
//                'image' => 'image.jpg',
//                'likes' => 498,
//                'is_published' => 0
//            ]);
//        dump($post->content);
//        dd('222222');
//    }


