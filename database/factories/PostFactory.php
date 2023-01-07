<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // the keys in the array are the coulmn names in the databse
            'title' =>  $this->faker->realText(50),
            'body' => $this->faker->realText(600),
            'author' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
