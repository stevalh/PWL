<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CreatePostController extends Controller
{
    
    public function index()
    {
        $categories=Category::all();
        return view('Blog.createpost',compact('categories'));
    }
    public function createpost(Request $request)
    {
      $validatedData =$request->validate([
        'title'=>'required|max:255|unique:posts',
        'category_id'=>'required',
        'thumb'=>'image|file|max:1024',
        'content'=>'required'

      ],
    [
        'title.max'=>"Judul maksimal terdiri atas 255 kata",
        'title.unique'=>"Judul Telah Dipakai",
        'thumb.image'=>"Hanya menerima gambar"
    ]);

    if($request->file('image'))
    {
        $validatedData['image']=$request->file('image')->store('thumbnail');
    }

      $validatedData['user_id']=auth()->user()->id;

      Post::create($validatedData);
    }
}
