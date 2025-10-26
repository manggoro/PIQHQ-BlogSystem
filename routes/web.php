<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anggoro Muhammad',
            'tanggal' => '1 Januari 2025',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dignissimos possimus nam molestiae ex reprehenderit facere nihil, consequatur, commodi eius, cumque id eligendi dolorem vitae earum doloremque. Et, sequi reprehenderit.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Anggoro Muhammad',
            'tanggal' => '5 Januari 2025',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores cum accusamus culpa dicta. Corporis, minima. Omnis ab impedit ea quos reiciendis fugit expedita accusantium nulla et. Blanditiis, eaque iusto!'
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anggoro Muhammad',
            'tanggal' => '1 Januari 2025',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dignissimos possimus nam molestiae ex reprehenderit facere nihil, consequatur, commodi eius, cumque id eligendi dolorem vitae earum doloremque. Et, sequi reprehenderit.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Anggoro Muhammad',
            'tanggal' => '5 Januari 2025',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores cum accusamus culpa dicta. Corporis, minima. Omnis ab impedit ea quos reiciendis fugit expedita accusantium nulla et. Blanditiis, eaque iusto!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
