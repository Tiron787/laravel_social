<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
}
 