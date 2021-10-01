<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



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

Route::get('/index',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/category/{category}',[PostController::class,'category'])->name('posts.category');

Route::get('/tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::get('/', function () {
    return view('web.inicio');
})->name('web.inicio');

Route::get('/nosotros', function () {
    return view('web.nosotros');
})->name('web.nosotros');

Route::get('/empresa', function () {
    return view('web.empresa');
})->name('web.empresa');

Route::get('/programa', function () {
    return view('web.programa');
})->name('web.programa');

Route::get('/blog', function () {
    return view('web.blog');
})->name('web.blog');

Route::get('/blog/detail', function () {
    return view('web.blogshow');
})->name('web.blogdetail');


Route::get('/contacto', function () {
    return view('web.contacto');
})->name('web.contacto');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
