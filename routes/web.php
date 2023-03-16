<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    return view('posts');


});

Route::get('/post/{post}', function ($p) {
    // $path = __DIR__ . "/../resources/posts/{$p}.html";
    // return !file_exists($path) ? redirect("/") : file_get_contents($path);
    return Post::find($p);

})->whereAlphaNumeric('post');