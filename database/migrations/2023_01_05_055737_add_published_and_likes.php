<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *S
     * @return void
     */
    public function up()
    {
        // i created this using the php artisan make:migration add_published_and_likes --table=posts
        // this is to update the existing table 'posts' by using --table=posts it uses table('posts') to update the table not to create a one
        Schema::table('posts', function (Blueprint $table) {
            $table->boolean('published')->default(false);
            $table->unsignedInteger('likes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
