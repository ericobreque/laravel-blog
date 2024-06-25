<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'eric',
            'password' => '$2a$12$SQBAztt9OMM6jjxF7oJ51eGNFvp2lM7dxtLuMg7i/yEl47Pya9lZC' //eric
        ]);

        $this->call([
            HomeSlide::class,
            About::class,
            MultiImage::class,
            Portfolio::class,
            BlogCategory::class,
            Blog::class,
            Footer::class,
            Contact::class
        ]);
    }
}
