<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // i used DB to acces to use query builder
use Carbon\Carbon; // i used Carbon package to handle time it comes with laravel you can install it in any project
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
    return view('welcome');
});

// '/posts/create' is the uri
// Route::get('/posts/create', function () {
//     return view('posts.create');
// });
// equavilant to the above route

Route::view('/posts/create', 'posts.create');  // i can use view() bec it return only a view 'posts.create'

// '/posts' is the rout uri in recive the data send from the <form action="/posts"-> SAME AS ROUTE URI  method="POST"->SAME AS route::post()  > in create.blade.php
Route::post('/posts', function () {
    // 'posts' table name ->insert [ the data ]
    DB::table('posts')->insert([
        'title' => request('title'), // 'coulmn name' , request() gets the data user put in the fields
        'body' => request('body'),
        'author' => request('author'),
        'created_at' => now(), // now Create a new Carbon instance for the current time , use Carbon\Carbon;
        'updated_at' => now(),
    ]);
    return back(); // if sucessful return the previous page
});


Route::get('/posts', function () {
    $posts = DB::table('posts')->latest()->get(); // $posts is a collection \Illuminate\Support\Collection $posts wich support alot of helper functions , latest() based on the timestamp in the column created_at
    return view('posts.index', compact('posts'));
});


Route::get('/posts/{id}', function ($id) {
    $post = DB::table('posts')->find($id); // find the current post by its id and pass it to the view to show it
    return view('posts.show', compact('post'));
});
