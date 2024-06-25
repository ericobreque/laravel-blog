<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            'name' => 'Eric Obreque',
            'email' => 'obreque.eric@gmail.com',
            //'username' => 'eric',
            'subject' => 'Contacto',
            'phone' => '987654321',
            'message' => 'Hello World!'
        ]);
    }
}
