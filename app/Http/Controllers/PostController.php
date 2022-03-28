<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function post(Post $post)
    {
        return view('post')->with(['post' => $post->get()]);
    }
}
?>