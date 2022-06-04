<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;

class setCategory extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function add()
   {
       return view('admin.addcategory');
   }

   public function post(Request $request)
    {
        $categories = DB::table('categories')->insert([
            'name' => $request->category_name
        ]);

        return redirect('/addcategory')->with('success','Kategori berhasil ditambah!');
    }

    public function showcategory()
    {
        $categories = DB::table('categories')->paginate(3);
        return view('admin.makecategory',['categories' => $categories]);
    }

    public function edit($id)
    {
        $categories = DB::table('categories')->where('id',$id)->get();
        return view('admin.editcategory',['categories'=>$categories]);
    }

    public function update(Request $request)
    {
        $categories = DB::table('categories')->where('id',$request->id) -> update([
            'name' => $request->category_name
        ]);
        return redirect('/makecategory');
    }

    public function hapuscategory($id)
    {
        DB::table('categories')->where('id',$id) ->delete();
        return redirect('/makecategory')->with('success','Delete successfully');
    }

    public function selectcategory()
    {
        $posts = DB::table('posts')->paginate(3);
        return view('admin.makepost',['posts'=> $posts]);
    }

    public function deladminpost($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back()->with('success','Delete successfully');
    }
}


