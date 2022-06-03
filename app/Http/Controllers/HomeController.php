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
        $posts=Post::paginate(2);// paginate yg ini aja
        $recents=Post::orderBy('created_at','DESC')->get()->take(3);
        // $sidebar=Post::all()//Paginate klo maau

        return view('Blog.index',compact('banners','posts','recents'));
    }
}

