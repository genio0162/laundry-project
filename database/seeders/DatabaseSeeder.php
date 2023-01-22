<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Laundry;
use App\Models\Category;
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

        // User::create([
        //     'name' => 'Rifiqie@gmail.com',
        //     'email' => 'rifqiefirmansyah232@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // Category::create([
        //     'name' => 'Perfume',
        //     'slug' => 'perfume'
        // ]);
        // Category::create([
        //     'name' => 'Shoes',
        //     'slug' => 'shoes'
        // ]);
        Category::factory(5)->create();
        Post::factory(15)->create();
    }
}
