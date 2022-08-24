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
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Category_post::factory(10)->create();

        \App\Models\User::create([
            "name" => "camado",
            "email" => "camado@gmail.com",
            "password" => bcrypt("password"),
            "picture" => "images/posts_images/python.jpg",
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
