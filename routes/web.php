<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blogs',[BlogController::class,'blog'])->name('myblogs');
Route::get('/deletepost/{id}',[BlogController::class,'deletepost']);


Route::get('/profile',[ProfileController::class,'index']);

Route::get('/editprofile',[ProfileController::class,'edit']);
Route::post('/editprofile',[ProfileController::class,'editprofile'])->name('edit');



// admin (not completed)
Route::get('/admin-panel', function () {
    return view('admin.index');
});

Route::get('/approvepost', function () {
    return view('admin.approvepost');
});

Route::get('/cekkomentar', function () {
    return view('admin.cekkomentar');
});

use App\Http\Controllers\setCategory;
Route::get('/addcategory',[setCategory::class,'add']);
Route::post('/addcategory/post',[setCategory::class,'post']);
Route::get('/makecategory',[setCategory::class,'make']);
Route::get('/makecategory/hapus/{id}',[setCategory::class,'hapus']);
Route::get('/trashcategory',[setCategory::class,'trash']);
Route::get('/makecategory/restore/{id}',[setCategory::class,'restore']);
Route::get('/makecategory/hapuspermanen/{id}',[setCategory::class,'hapuspermanen']);

Route::get('/makepost', function () {
    return view('admin.makepost');
});

Route::get('/pagesprofile', function () {
    return view('admin.pages-profile');
});

Route::get('/trashcomment',function(){
    return view('admin.trashcomment');
});



// end of admin (not completed)

Auth::routes();

Route::get('/about/{id}',[BlogController::class,'about']);

Route::get('/blog/{id}',[BlogController::class,'find']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/create',[CreatePostController::class,'index'])->name('createpost');

Route::post('/create',[CreatePostController::class,'createpost'])->name('createpost');




