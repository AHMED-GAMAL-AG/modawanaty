<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id,
        ]);

        return back();
    }
}
