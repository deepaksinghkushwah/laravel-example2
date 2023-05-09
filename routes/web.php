<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('welcome');
})->name('site.home');

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/show/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('/login', function(){
    return view('site.login');
})->name('site.login');

Route::get('/signup', function(){
    return view('site.signup');
})->name('site.signup');

Route::get('/faq', function(){
    return view('site.faq');
})->name('site.faq');

Route::get('/about', function(){
    return view('site.about');
})->name('site.about');






