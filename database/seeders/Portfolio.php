<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Portfolio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('portfolios')->insert([
            'portfolio_name' => 'PHP',
            'portfolio_title' => 'PHP',
            'portfolio_image' => 'PHP',
            'portfolio_description' => 'PHP'
        ]);
    }
}
