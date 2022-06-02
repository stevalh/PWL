<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    
    public function blog()
    {
        return view('Blog.blog');
    }

    public function about($id)
    {
        $user=User::find($id);
        $posts=$user->posts()->paginate(2);
        return view('Blog.about',compact('user','posts'));
    }

    public function deletepost($id)
    {
        $post=Post::findorFail($id);
        $post->delete();
        return redirect()->back();
    }


   

  

    public function find($id)
    {
        $post=Post::findorFail($id);
        return view ('Blog.post-details',compact('post'));
    }

   
}