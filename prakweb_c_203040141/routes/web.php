<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Devin Febrian",
        "email" => "devinfebrian20@gmail.com",
        "image" => "devin.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Devin Febrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti obcaecati esse dolores quia facilis quo, dolorem consectetur voluptas temporibus, culpa doloremque illo praesentium omnis ipsum vel molestias porro maxime adipisci quasi! Cum velit, similique esse fugit ipsam animi assumenda recusandae earum cupiditate at odio molestiae veritatis dicta nemo error, eos labore facere asperiores pariatur quaerat obcaecati placeat blanditiis doloremque. Excepturi vitae consectetur ducimus quisquam quo incidunt corporis voluptates voluptatibus delectus, suscipit, perferendis quod architecto ex? Qui iste vitae fugiat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Chairil Daffa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore exercitationem asperiores nisi debitis officiis doloribus nam necessitatibus, enim tempore pariatur dicta nemo quibusdam error quis aliquid optio voluptates quos quae accusamus magnam fugit. Eum accusamus voluptatibus facere et maiores dolorum adipisci assumenda repudiandae. Quia ab inventore, dolores asperiores numquam impedit? Veniam fugit voluptatum, praesentium facilis laudantium iusto voluptatem reiciendis nam corporis hic. Dolor, impedit adipisci nostrum ad illo pariatur quaerat laboriosam? Commodi laudantium, natus quia amet odio facere sint dolore nam. Hic, consequuntur adipisci earum eum aperiam quos reiciendis consectetur in dicta culpa pariatur obcaecati ipsam quibusdam ducimus cumque."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Devin Febrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non deleniti obcaecati esse dolores quia facilis quo, dolorem consectetur voluptas temporibus, culpa doloremque illo praesentium omnis ipsum vel molestias porro maxime adipisci quasi! Cum velit, similique esse fugit ipsam animi assumenda recusandae earum cupiditate at odio molestiae veritatis dicta nemo error, eos labore facere asperiores pariatur quaerat obcaecati placeat blanditiis doloremque. Excepturi vitae consectetur ducimus quisquam quo incidunt corporis voluptates voluptatibus delectus, suscipit, perferendis quod architecto ex? Qui iste vitae fugiat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Chairil Daffa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore exercitationem asperiores nisi debitis officiis doloribus nam necessitatibus, enim tempore pariatur dicta nemo quibusdam error quis aliquid optio voluptates quos quae accusamus magnam fugit. Eum accusamus voluptatibus facere et maiores dolorum adipisci assumenda repudiandae. Quia ab inventore, dolores asperiores numquam impedit? Veniam fugit voluptatum, praesentium facilis laudantium iusto voluptatem reiciendis nam corporis hic. Dolor, impedit adipisci nostrum ad illo pariatur quaerat laboriosam? Commodi laudantium, natus quia amet odio facere sint dolore nam. Hic, consequuntur adipisci earum eum aperiam quos reiciendis consectetur in dicta culpa pariatur obcaecati ipsam quibusdam ducimus cumque."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
