<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Profesor']);

        Permission::create(['name' => 'admin.index'])->assignRole($role1);

        Permission::create(['name' => 'form.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'form.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'user.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'user.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'form.show'])->syncRoles([$role1, $role2]);

    }
}
