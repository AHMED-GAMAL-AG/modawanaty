<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeComment;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(storeComment $request ,Post $post)
    {
        $request->rules; // php artisan make:request storeComment to use the rules() method in it to validate the user input on comment fides

        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id,
        ]);

        return back();
    }
}
