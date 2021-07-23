<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($array = array ('Grupo 1','Grupo 2','Grupo 3','Grupo 4', 'Grupo 5','Grupo 6','Grupo 7','Grupo 8','Grupo 9')),
            'id_course' => Course::all()->random()->id
        ];
    }
}
