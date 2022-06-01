<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreatePostController;

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


Route::get('/profile', function () {
    return view('blog.profile');
});

Route::get('/admin-panel', function () {
    return view('admin.index');
});

Auth::routes();



Route::get('/about',[BlogController::class,'about'])->name('about');

Route::get('/blog/{id}',[BlogController::class,'find']);


Route::get('/contact',[BlogController::class,'contact'])->name('contact');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/create',[CreatePostController::class,'index'])->name('createpost');

Route::post('/create',[CreatePostController::class,'createpost'])->name('createpost');




