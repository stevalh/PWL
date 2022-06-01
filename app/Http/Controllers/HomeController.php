<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners=Post::all()->take(5);
        $posts=Post::all();// paginate yg ini aja
        // $sidebar=Post::all()//Paginate klo maau

        return view('Blog.index',compact('banners','posts'));
    }
}

