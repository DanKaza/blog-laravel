<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home' , ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'Dammiyan ']) ;
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});





// ini buat fungsi posts dan single post.



Route::get('/posts/{slug}', function($slug) {
    $posts = [
         [
            'id' => 1,
            'slug' => 'just-one',   
            'title' => 'Just One',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae'
        ],
        
        [
            'id' => 2,
            'slug' => 'just-two',
            'title' => 'Just Two',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae suiqwnas jsdhsdapijn ajndasa'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
     
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});





Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog' ,'posts' => [
        [
            'id' => 1,
            'slug' => 'just-one',
            'title' => 'Just One',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae'
        ],
        
        [
            'id' => 2,
            'slug' => 'just-two',
            'title' => 'Just Two',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae suiqwnas jsdhsdapijn ajndasa'
        ]
    ]]);
});