<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class setCategory extends Controller
{
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
        $categories = DB::table('categories')->paginate(9);
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
        $categories = DB::table('categories')->get();
        return view('admin.makepost',['categories'=> $categories]);
    }
}


