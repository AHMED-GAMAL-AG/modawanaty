<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = DB::table('posts')->latest()->get(); // using querybuilder $posts is a collection \Illuminate\Support\Collection $posts with support a lot of helper functions , latest() based on the timestamp in the column created_at
        $posts = Post::all(); // using eloquent
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'posts' table name ->insert [ the data ]
        Post::create([
            'title' => request('title'), // 'column name' , request() gets the data user put in the fields
            'body' => request('body'),
            'author' => request('author'),

            // no need to use these eloquent create it automatically // get tha post
            // 'created_at' => now(), // now Create a new Carbon instance for the current time , use Carbon\Carbon;
            // 'updated_at' => now(),
        ]);
        return redirect('/posts'); // if successful redirect to the home page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) // model route binding $post has to be the same name as in the  php artisan route:list command post/{post} .
    {
        // $post = DB::table('posts')->find($id); // find the current post by its id and pass it to the view to show it
        // $post = Post::findOrFail($id); // using eloquent
        $comments = $post->comments()->where('approved', 1)->get();  // use this if you want to show only approved comments and pass to compact  $comments// or you can use $post->comments to get all add() to comments() to use eloquent function as where()

        return view('posts.show', compact(['post', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)  // to show the data in the field in the edit post form
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
        ]);

        return redirect('/posts/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
