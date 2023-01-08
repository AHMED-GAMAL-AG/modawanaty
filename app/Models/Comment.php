<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    // i can call this function as $comment->post
    public function post() // to set a comment BelongsTo post relation
    {
        return $this->BelongsTo(Post::class); // $this-> comment class BelongsTo Post
    }
}
