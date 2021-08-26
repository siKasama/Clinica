<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return  [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'fone' => $this->faker->phoneNumber,
            'rg' => $this->faker->numerify('#########'),
            'city' => $this->faker->city,
            'uf' => $this->faker->state
        ];
    }
}
