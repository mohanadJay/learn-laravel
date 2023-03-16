<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{


    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");
        return cache()->remember("post/{$slug}", 60, function () use ($path) {


            return file_get_contents($path);
        });


    }



}