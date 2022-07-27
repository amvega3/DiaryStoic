<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador',
        'description' => 'Administrador del Sistema'
        ]) ; //

        $role2 = Role::create(['name' => 'Lector',
        'description' => 'Lector']) ; //
        $role3 = Role::create(['name' => 'Editor',
        'description' => 'Editor']) ; //

    }
}
