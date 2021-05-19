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
        $this->admin();

        User::factory()->times(2)->create();
    }

    public function admin()
    {
        User::create([
            'name' =>'Adrián',
            'surname' => 'kasjdk',
            'department' => 'filo',
            'group' => 'A',
            'email' => 'adrian@mail.es',
            'password' => bcrypt('1234'),
        ]);

    }

}
