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
    return view('welcome');
});


// Route::get('/hello/{name}' , function($name) //  get the data between the {} in the url
// {
//     return view('hello' , [
//         'name' => $name]);
//     return view('hello')->with(['name' => $name]);
// });

// // equivalent to this using with()
// Route::get('/hello/{name}', function ($name) //  get the data between the {} in the url
// {
//     return view('hello')->with(['name' => $name]);
// });

// equivalent to this using compact()
Route::get('/hello/{name}', function ($name) //  get the data between the {} in the url
{
    return view('hello', compact('name'));  // must be as $name in the method
});

