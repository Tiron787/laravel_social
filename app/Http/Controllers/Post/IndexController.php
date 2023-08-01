<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;

use App\Http\Controllers\Controller;
use  Illuminate\Http\Request;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Filters\PostFilter;

use function PHPUnit\Framework\returnSelf;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = App()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
       
        $posts = Post::filter($filter)->paginate(10);
        

        //$posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }
}
