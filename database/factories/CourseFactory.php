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
            'name' => $this->faker->unique()->randomElement($array = array ('A1','A2','A3','B1','B2','B3')),
            'id_subject' => Subject::all()->random()->id
        ];
    }
}
