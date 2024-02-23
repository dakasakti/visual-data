<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = new \App\Models\UserNew;
        $input -> name = 'Wanda1';
        $input -> email = 'admin@gmail.com';
        $input -> role = 'admin';
        $input -> password = \Hash::make('12345');

        $input->assignRole('admin');

        $input-> save();
       


    }
}
