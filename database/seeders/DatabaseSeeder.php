<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            LocationSeeder::class,
            ClassroomSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            BranchSeeder::class,
            LessonSeeder::class,
            RegistrationSeeder::class,
        ]);
    }
}
