<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Course;
use App\Models\Group;
use App\Models\Student;
use App\Models\GroupStudent;
use App\Models\Enrollment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Subject::factory(10)->create();
        Course::factory(10)->create();
        Group::factory(10)->create();
        Student::factory(10)->create();
        GroupStudent::factory(10)->create();
        Enrollment::factory(10)->create();
    }
}
