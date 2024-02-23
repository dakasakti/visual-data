<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
     
        Permission::firstOrCreate(['name' => 'tambah-data2']);
        Permission::firstOrCreate(['name' => 'edit-data']);
        Permission::firstOrCreate(['name' => 'hapus-data']);
        Permission::firstOrCreate(['name' => 'lihat-data']);
        Permission::firstOrCreate(['name' => 'export-data']);
        Permission::firstOrCreate(['name' => 'import-data']);
        
       

 
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);

    
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo(['tambah-data2', 'edit-data', 'hapus-data', 'lihat-data', 'export-data','import-data']);

    
        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('lihat-data','export-data');
    }
}
