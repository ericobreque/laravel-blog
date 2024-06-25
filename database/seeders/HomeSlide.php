<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HomeSlide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('home_slides')->insert([
            'title' => 'Home Slide',
            'short_title' => 'Welcome to Eric Obreques page',
            'home_slide' => 'upload/home_slide/1802839200984767.png',
            'video_url' => 'https://ericobreque.cl/'
        ]);
    }
}
