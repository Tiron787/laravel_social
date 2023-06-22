<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index()
    {
        
$category = Category::find(1);
        $post = Post::find(1);

        dd($post->category);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = Request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }


    public function show(Post $post){

        return view('post.show', compact('post'));
    }

public function edit(Post $post){

    return view('post.edit', compact('post'));
}


    public function update(Post $post)
    {
        $data = Request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
    ]);
    $post->update($data);
    return redirect()->route('post.show', $post->id);
    }
 
    public function destroy(Post $post){

        $post->delete();
        return redirect ()->route ('post.index');
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
