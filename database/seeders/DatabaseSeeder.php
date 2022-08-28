<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(3)->create();
        Post::factory(20)->create();
        Category::create([
            'name' => 'programing',
            'slug' => 'programing',
        ]);
        Category::create([
            'name' => 'desain',
            'slug' => 'desain',
        ]);
        Category::create([
            'name' => 'artikel',
            'slug' => 'artikel',
        ]);
        Category::create([
            'name' => 'sport',
            'slug' => 'sport',
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
