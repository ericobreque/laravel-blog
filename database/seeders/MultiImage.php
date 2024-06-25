<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MultiImage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727509849766794.png'
        ]);

        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727510078083825.png'
        ]);

        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727510078414219.png'
        ]);

        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727510078591020.png'
        ]);

        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727514027624366.png'
        ]);

        DB::table('multi_images')->insert([
            'multi_image' => 'upload/multi/1727515436202052.png'
        ]);
    }
}
