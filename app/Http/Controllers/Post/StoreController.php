<?php

namespace App\Http\Controllers\Post;
use App\Models\Post;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Controllers\Post\BaseController;
use App\Http\Services;
use Illuminate\Http\Request; 

use function PHPUnit\Framework\returnSelf;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)      
    {
        $data = $request->validated();
        
        $this->service->store($data);
        
        return redirect()->route('post.index');
    }
}
