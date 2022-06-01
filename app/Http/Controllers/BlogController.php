<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{


   
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function blog()
    {
        return view('Blog.blog');
    }

    public function about()
    {
        return view('Blog.about');
    }

    public function contact()
    {
        return view('Blog.contact');
    }

   

  

    public function find($id)
    {
        $post=Post::findorFail($id);
        return view ('Blog.post-details',compact('post'));
    }

   
}