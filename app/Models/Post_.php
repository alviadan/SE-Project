<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Alvian Daniel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur dignissimos iure odio! Accusantium eaque minima ipsa error optio, cupiditate officiis eveniet odit dolor saepe doloribus laudantium veniam nostrum repellendus, voluptate obcaecati. Hic nihil voluptatum quas, consequatur eveniet sunt maiores. Rerum, officia explicabo molestias numquam doloribus animi qui voluptatum exercitationem."
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Jason Sus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur dignissimos iure odio! Accusantium eaque minima ipsa error optio, cupiditate officiis eveniet odit dolor saepe doloribus laudantium veniam nostrum repellendus, voluptate obcaecati. Hic nihil voluptatum quas, consequatur eveniet sunt maiores. Rerum, officia explicabo molestias numquam doloribus animi qui voluptatum exercitationem."
        ],
        [
            "title" => "Judul Post 3",
            "slug" =>  "judul-post-3",
            "author" => "Hansel Chris",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia asperiores, perferendis at sint ab, optio pariatur est, qui nulla possimus provident amet rerum eligendi fugiat ea. Quas quidem quibusdam repudiandae."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
