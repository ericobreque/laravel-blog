<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->insert([
            'title' => 'Home Slide',
            'short_title' => 'Welcome to Eric Obreques page',
            'short_description' => 'Welcome to Eric Obreques page',
            'long_description' => 'https://ericobreque.cl/',
            'about_image' => 'upload/home_slide/1802839200984767.png'
        ]);
    }
}
