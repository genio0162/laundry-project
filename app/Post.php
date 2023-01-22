<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "category" => "Lifestyle",
            "img" => "single_blog_1.png",
            "body" => "That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "category" => "Health",
            "img" => "single_blog_2.png",
            "body" => "That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying"
        ],
        [
            "title" => "Judul Post ketiga test",
            "slug" => "judul-post-ketiga",
            "category" => "Social",
            "img" => "single_blog_3.png",
            "body" => "That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
                $post=[];

        return $posts->firstWhere('slug',$slug);
    }
}
