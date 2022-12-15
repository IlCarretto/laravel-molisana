<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    $pasta = config('db.pasta');
    return view('products', compact("pasta"));
})->name('products');

Route::get('/news', function () {
    $posts = config('db.posts');
    dd($posts);
    return view('news', compact('posts'));
})->name('news');
