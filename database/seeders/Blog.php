<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'blog_category_id' => '1',
            'blog_title' => 'PHP',
            'blog_image' => 'PHP',
            'blog_tags' => 'PHP',
            'blog_description' => 'PHP'
        ]);
    }
}
