<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    // i did not give elequent the table name i just did  php artisan make:model Post
    // it asumes that the table is the class name in lower char and plural Post => posts
    // i cant also define the table name myself by using : protected $table = "my-post";
    // it asumes for primarykey = id  i can changed by protected primarykey = "my-key";
    // it asumes for primarykey  increment = true  i can changed by protected incrementing = false;
    // it asumes for timestamp = true that it hase created_at and updated_at  i can changed by protected timestamp = false;
    // it asumes for connection with database the defualt value i can changed by protected connection  = "my-connection";

class Post extends Model
{
    use HasFactory; // allows me to call Post::factory()->create();

    // to allow mass assigment use $fillable to allow specific columns or $gurded =[] to allow all for example the user could put in the coulmn is_admin true you should be carfaul
    protected $fillable = ['title' , 'body' ,'author']; // allow the user only to update these in the dabase for protection

}
