<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'admin',
            'guard_name'=>'admin'
        ]);

        Role::create([
            'name'=>'user',
            'guard_name'=>'user'
        ]);
    }
}
