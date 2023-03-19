<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{

    public $title;
    public $date;
    public $abstract;
    public $body;
    public $slug;



    public function __construct($slug, $title, $date, $abstract, $body, )
    {
        $this->title = $title;
        $this->date = $date;
        $this->abstract = $abstract;
        $this->body = $body;
        $this->slug = $slug;



    }


    public static function all()
    {



        $files = File::files(resource_path("posts"));
        $files = array_map(function ($file) {
            return $file->getPathname();
        }, $files);
        $files = array_map(function ($file) {
            $docs = YamlFrontMatter::parseFile($file);

            return new Post($docs->slug, $docs->title, $docs->date, $docs->abstract, $docs->body());
        }, $files);

        return cache()->remember("post.all", 10, fn() => $files);


    }


    public static function find($slug)
    {


        $docs = YamlFrontMatter::parseFile(resource_path("/posts/{$slug}.html"));
        $ss = cache()->remember("post/{$slug}", 60, fn() => new Post($docs->slug, $docs->title, $docs->date, $docs->abstract, $docs->body()));

        return $ss;



    }



}