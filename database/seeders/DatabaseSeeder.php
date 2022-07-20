<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Like;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // factory(User::class, 10)->create();
        \App\Models\User::factory()->count(10)->create(); 
        // factory(Category::class, 5)->create();
        \App\Models\Category::factory()->count(5)->create();
        // factory(Question::class, 10)->create();
        \App\Models\Question::factory()->count(10)->create(); 
        \App\Models\Reply::factory()->count(50)->create()->each(function($reply){
            return $reply->like()->save(\App\Models\Like::factory()->make());
        });
    }
}
