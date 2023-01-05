<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // i created this file using  php artisan make:migration create_posts_table command
        // laravel taks "create_posts" and guess that i want to use function create('posts -> is table name')
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 25);
            $table->string('author');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
