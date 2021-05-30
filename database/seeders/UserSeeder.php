<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Adrián',
            'surname' => 'Garcia',
            'department' => 'filo',
            'group' => 'A',
            'email' => 'adrian@mail.es',
            'password' => bcrypt('1234'),
        ])->assignRole('Admin');

        User::factory(2)->create();
    }

}
