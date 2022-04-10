<?php

namespace App\Http\Controllers;

use App\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index(Target $target)
    {
        return view('index')->with(['targets' => $target->get()]);  
    }
    
    //public function post(Target $target)
    //{
        //return view('post')->with(['targets' => $target->get()]);  
    //}
    
    public function user(Target $target)
    {
        return view('user')->with(['target' => $target]);  
    }
    
    public function show(Target $target)
    {
        //dd($target);
        //$targets =Target::all();
        return view('show')->with(['target' => $target]); 
        
    }
    
}
