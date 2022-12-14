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
            "title" => $this->faker->name(),
            "cover" => "posts_images/python.jpg",
            "description" => $this->faker->paragraph(),
            "content" => $this->faker->paragraph(),
            "user_id" => $this->faker->numberBetween(1, 10),
        ];
    }
}
