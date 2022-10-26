<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Devin Febrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti obcaecati esse dolores quia facilis quo, dolorem consectetur voluptas temporibus, culpa doloremque illo praesentium omnis ipsum vel molestias porro maxime adipisci quasi! Cum velit, similique esse fugit ipsam animi assumenda recusandae earum cupiditate at odio molestiae veritatis dicta nemo error, eos labore facere asperiores pariatur quaerat obcaecati placeat blanditiis doloremque. Excepturi vitae consectetur ducimus quisquam quo incidunt corporis voluptates voluptatibus delectus, suscipit, perferendis quod architecto ex? Qui iste vitae fugiat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Edelwiss",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore exercitationem asperiores nisi debitis officiis doloribus nam necessitatibus, enim tempore pariatur dicta nemo quibusdam error quis aliquid optio voluptates quos quae accusamus magnam fugit. Eum accusamus voluptatibus facere et maiores dolorum adipisci assumenda repudiandae. Quia ab inventore, dolores asperiores numquam impedit? Veniam fugit voluptatum, praesentium facilis laudantium iusto voluptatem reiciendis nam corporis hic. Dolor, impedit adipisci nostrum ad illo pariatur quaerat laboriosam? Commodi laudantium, natus quia amet odio facere sint dolore nam. Hic, consequuntur adipisci earum eum aperiam quos reiciendis consectetur in dicta culpa pariatur obcaecati ipsam quibusdam ducimus cumque."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
