<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    // dd(YamlFrontMatter::parseFile(resource_path('posts/p1.html')));]
    return view('/posts', ['posts' => Post::all(), "heading" => "My Blogs"]);


});

Route::get('/post/{post}', function (Post $post) {

    return view('/post', ['post' => $post]);

})->whereAlphaNumeric('post');



Route::get('/category/{category}', function (Category $category) {
    return view('/posts', ['posts' => $category->posts, "heading" => $category->name]);

})->whereAlphaNumeric('category');