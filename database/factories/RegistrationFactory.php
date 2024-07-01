<?php

namespace Database\Factories;

use App\Models\Registration;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lesson_id' => Lesson::inRandomOrder()->first()->id,
            'student_id' => Student::inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
