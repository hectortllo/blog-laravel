<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Héctor Tello',
            'email'=> 'tello@admin.com',
            'password' => bcrypt('123456')
        ]);

        Post::factory()->count(24)->create();
        // \App\Models\User::factory(10)->create();
    }
}
