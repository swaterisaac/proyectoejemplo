<?php

namespace Database\Factories;

use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enrollment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'level' => $this->faker->unique()->numberBetween($min = 1, $max = 12),
            'date' => $this->faker->date(),
            'id_student' => Student::all()->random()->id
        ];
    }
}
