<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   

    public function postDetails()
    {
        return view('Blog.post-details');
    }

   
}