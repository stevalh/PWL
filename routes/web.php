<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\BlogController;
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
Route::get('/blog',[BlogController::class,'postDetails'])->name('details');
Route::get('/contact',[BlogController::class,'contact'])->name('contact');
Route::get('/',[BlogController::class,'index'])->name('home');
