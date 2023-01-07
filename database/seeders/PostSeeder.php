<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'title' => str::random(20),
        //     'author' => str::random(20),
        //     'body' => str::random(20),
        // ]);

        Post::factory()->count(20)->create(); // use PostFacory.php instead if the above code i can call Post::factory() bec it is defined in the Post.php use HasFactory;
    }
}
