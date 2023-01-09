<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // i used DB to access to use query builder
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


// Route::get('/posts/create', [PostsController::class ,'create']);  // i can use view() bec it return only a view 'posts.create'

// //'/posts' is the rout uri in receive the data send from the <form action="/posts"-> SAME AS ROUTE URI  method="POST"->SAME AS route::post()  > in create.blade.php
// Route::post('/posts', [PostsController::class , 'store'] );
// Route::get('/posts', [PostsController::class , 'index']);
// Route::get('/posts/{id}', [PostsController::class , 'show']);

// route name , controller name
Route::resource('posts', PostsController::class);
