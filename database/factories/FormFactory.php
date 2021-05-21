<?php

namespace Database\Factories;

use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from_name' => $this->faker->name,
            'to_name' => $this->faker->name,
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'asunto' => $this->faker->sentence,
            'contact' => $this->faker->name,
            'tlf' => 600000000,
            'tlf2' => 600000001,
            'mail' => $this->faker->email,
            'mail2' => $this->faker->email,
            'observaciones' => $this->faker->sentence,
            'user_id' => 2
        ];
    }
}
