<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;
use App\Models\User;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::factory()->times(10)->create();
    }

}
