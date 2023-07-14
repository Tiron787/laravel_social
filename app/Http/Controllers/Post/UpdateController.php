<?php

namespace App\Http\Controllers\Post; 
use App\Models\Post;

use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Post\BaseController;

use function PHPUnit\Framework\returnSelf;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->service->update($post, $data);
       
        return redirect()->route('post.show', $post->id);
    }
}
  