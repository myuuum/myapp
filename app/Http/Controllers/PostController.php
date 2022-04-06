<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function post(Post $post)
    {
        return view('post')->with(['posts' => $post->get()]);  
    }
    
    public function create($target_id)
    {
        return view('create')->with(['target_id' => $target_id]);
    }
    
    public function index(Post $post)
    {
        return view('categories.index')->with(['target' => $post->getByPost()]);
    }

    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => 1];
        $post->fill($input)->save();
        return redirect('/target/' . $input['target_id']);
    }
    
}
?>