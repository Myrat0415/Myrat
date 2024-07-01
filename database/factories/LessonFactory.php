<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Classroom;
use App\Models\Branch;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classroom_id' => Classroom::inRandomOrder()->first()->id,
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
        ];
    }
}
