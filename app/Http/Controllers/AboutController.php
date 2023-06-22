<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AboutController extends Controller
{
    public function index() {
       
     
        return view('about');
    }

}