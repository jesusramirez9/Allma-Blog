<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ContactoProController;



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


Route::get('/category/{category}',[PostController::class,'category'])->name('posts.category');

Route::get('/tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::get('', function () {
    return view('web.inicio');
})->name('web.inicio');

Route::get('/nosotros', function () {
    return view('web.nosotros');
})->name('web.nosotros');

Route::get('/empresa', function () {
    return view('web.empresa');
})->name('web.empresa');


Route::get('programa',[ContactoProController::class, 'index'])->name('web.programa');
Route::post('programa',[ContactoProController::class, 'store'])->name('contactopro.store');

Route::get('contactanos',[ContactoController::class, 'index'])->name('contacto');
Route::post('contactanos',[ContactoController::class, 'store'])->name('contacto.store');



Route::get('/blog',[PostController::class,'index'])->name('posts.index');

Route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');

// Route::get('/blog', function () {
//     return view('web.blog');
// })->name('web.blog');

// Route::get('/blog/detail', function () {
//     return view('web.blogshow');
// })->name('web.blogdetail');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
