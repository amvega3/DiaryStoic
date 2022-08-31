<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        'description' => 'Administrador del Sistema']) ; //
        $role2 = Role::create(['name' => 'Lector',
        'description' => 'Lector']) ; //
        $role3 = Role::create(['name' => 'Editor',
        'description' => 'Editor']) ; //

        Permission::create(['name' => 'ListarPosts.index', 'description' => 'Listar Posts'])->syncRoles($role2, $role1, $role3);
        Permission::create(['name' => 'EditarPosts.edit', 'description' => 'Editar Posts'])->syncRoles($role1);
        Permission::create(['name' => 'EliminarPosts.destroy', 'description' => 'Eliminar Posts'])->syncRoles($role1);

        Permission::create(['name' => 'ListarRoles.index', 'description' => 'Listar Roles'])->syncRoles($role1);
        Permission::create(['name' => 'EditarRoles.edit', 'description' => 'Editar Roles'])->syncRoles($role1);
        Permission::create(['name' => 'EliminarRoles.destroy', 'description' => 'Eliminar Roles'])->syncRoles($role1);

    }
}
