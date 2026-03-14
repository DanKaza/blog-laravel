<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// we will learn to use a class


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
    

    $post = Post::find($slug);
     
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});





Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog' ,'posts' => Post::all()]);
});