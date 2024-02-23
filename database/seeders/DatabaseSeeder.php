<?php

use Illuminate\Database\Seeder;
use Database\Seeders\RolePermissionSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolePermissionSeeder::class);
     
        // ...
    }
}
