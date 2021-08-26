<?php

namespace Database\Factories;

use App\Models\Diary;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paciente_id' => $this->faker->numberBetween(1, 10),
            'doctor_id' => $this->faker->numberBetween(1, 3),
            'date' => $this->faker->unique()->dateTime(),
            'observations' => $this->faker->paragraph(rand(3, 6))
        ];
    }
}
