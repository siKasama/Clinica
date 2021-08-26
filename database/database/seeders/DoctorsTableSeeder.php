<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Database\Factories\DoctorFactory;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::factory()->count(4)->create();
    }
}
