<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        //$categories = Category::all();
        dd($tag->posts);
        $tags = Tag::find(1);
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required | string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);   //request to base
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::All(); 
        return view('post.edit', compact('post', 'categories','tags'));
    }

    public function update(Post $post)
    {
        $data = Request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post = $post->fresh();
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }

    public function first_or_create()
    {
        // $anotherPost = [
        //     'title' => 'some post2',
        //     'content' => 'some ugly content',
        //     'image' => 'one fucked image',
        //     'likes' => 900,
        //     'is_published' => 1,
        // ];
        $post = Post::firstOrCreate(
            [
                'title' => 'some post4', //if they find displayed, if not create
            ],
            [
                'title' => 'some post4', //put this data
                'content' => 'some ugly content',
                'image' => 'one fucked image',
                'likes' => 900,
                'is_published' => 1,
            ],
        );
        dump($post->title);
        dd('first or create');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'updateOrCreate',
            'content' => 'updateOrCreate',
            'image' => 'one fucked image',
            'likes' => 900,
            'is_published' => 1,
        ];
        $post = Post::updateOrCreate(
            [
                'title' => 'updateOrCreate4',
            ],
            [
                'title' => 'updateOrCreate3',
                'content' => 'updateOrCreate3',
                'image' => 'one fucked image updateOrCreate2',
                'likes' => 578,
                'is_published' => 1,
            ],
        );
        dd('work updateOrCreate');
    }
}
