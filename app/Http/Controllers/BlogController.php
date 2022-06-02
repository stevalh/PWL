<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{

    
    public function blog()
    {
        return view('Blog.blog');
    }

    public function about($id)
    {
        $user=User::findorFail($id);
        return view('Blog.about',compact('user'));
    }



   

  

    public function find($id)
    {
        $post=Post::findorFail($id);
        return view ('Blog.post-details',compact('post'));
    }

   
}