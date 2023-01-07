<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call([
                PostSeeder::class // to run this command  php artisan db:seed --class =  PostSeeder without writing the class name just php artisan db:seed
            ]);
    }
}
