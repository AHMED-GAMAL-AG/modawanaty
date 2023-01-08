<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    // i did not give eloquent the table name i just did  php artisan make:model Post
    // it assumes that the table is the class name in lower char and plural Post => posts
    // i cant also define the table name myself by using : protected $table = "my-post";
    // it assumes for primarykey = id  i can changed by protected primarykey = "my-key";
    // it assumes for primarykey  increment = true  i can changed by protected incrementing = false;
    // it assumes for timestamp = true that it has created_at and updated_at  i can changed by protected timestamp = false;
    // it assumes for connection with database the default value i can changed by protected connection  = "my-connection";

class Post extends Model
{
    use HasFactory; // allows me to call Post::factory()->create();

    // to allow mass assignment use $fillable to allow specific columns or $gurged =[] to allow all for example the user could put in the column is_admin true you should be carful
    protected $fillable = ['title' , 'body' ,'author']; // allow the user only to update these in the database for protection

    // i can call this function as $post->comments
    public function comments() // to set post has many comments relation named comments() bec it has more than one
    {
        // Laravel convert the function name first Letter to C and add has to it hasComments so i can used it in the data seeder
        return $this->hasMany(Comment::class); // $this -> Post has many comments
    }
}
