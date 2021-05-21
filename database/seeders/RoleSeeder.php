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
        Role::create(['name' => 'Jefatura']);
        Role::create(['name' => 'Profesor']);
        Role::create(['name' => 'Conserje']);

        Permission::create(['name' => 'admin'])->assignRole('Jefatura');

    }
}
