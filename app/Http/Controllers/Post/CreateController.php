<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Post\BaseController;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::All();

        return view('post.create', compact('categories', 'tags'));
    }
}
   