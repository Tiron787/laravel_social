<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
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
}
