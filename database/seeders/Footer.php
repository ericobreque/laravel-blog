<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class Footer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('footers')->insert([
            'number' => '1',
            'short_description' => 'Goodbye to Eric Obreques page',
            'adress' => 'Los Angeles, Chile',
            'email' => 'https://ericobreque.cl/',
            'facebook' => 'https://ericobreque.cl/',
            'twitter' => 'https://ericobreque.cl/',
            'copyright' => 'Eric Obreque'
        ]);
    }
}
