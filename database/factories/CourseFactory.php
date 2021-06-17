<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'id_asignatura' => Subject::all()->random()->id
        ];
    }
}
