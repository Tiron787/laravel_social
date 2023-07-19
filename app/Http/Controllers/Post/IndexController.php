<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class IndexController extends BaseController 
{
    public function __invoke(FilterRequest $request)
    {
        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }
}
 