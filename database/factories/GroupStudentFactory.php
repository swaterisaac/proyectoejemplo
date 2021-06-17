<?php

namespace Database\Factories;

use App\Models\GroupStudent;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupStudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GroupStudent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'es_lider' => $this->faker->boolean(),
            'id_grupo' => Group::all()->random()->id,
            'id_student' => Student::all()->random()->id,
        ];
    }
}
