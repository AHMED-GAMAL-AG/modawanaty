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
        // created this using php artisan make:migration change_title_max_characters --table=posts command
        // this is to update the existing table 'posts' by using --table=posts it uses table('posts') to update the table not to create a one
        // i installed first composer require doctrine/dbal to use the change() method to update the ->string('title' ,25) value to 50
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title', 50)->change(); // this was ->string('title' ,25) to 50
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
