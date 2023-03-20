<?php

use App\Models\Category;
use App\Models\User;
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

    // dd(YamlFrontMatter::parseFile(resource_path('posts/p1.html')));]
    return view('/posts', ['posts' => Post::latest()->get(), "heading" => "My Blogs"]);
    // return Post::latest()->get();


});

Route::get('/post/{post}', function (Post $post) {

    return view('/post', ['post' => $post]);

})->whereAlphaNumeric('post');



Route::get('/category', function () {
    return view('/list', ['list' => Category::all(), "heading" => "Categories", "listType" => 'category']);

});



Route::get('/category/{category}', function (Category $category) {
    return view('/posts', ['posts' => $category->posts, "heading" => "Posts in $category->name"]);

})->whereAlphaNumeric('category');

Route::get('/user/{user}', function (User $user) {
    return view('/posts', ['posts' => $user->posts, "heading" => "Posts by : $user->name "]);

})->whereAlphaNumeric('user');


Route::get('/user', function () {
    return view('/list', ['list' => User::all(), "heading" => "Categories", "listType" => 'user']);

});