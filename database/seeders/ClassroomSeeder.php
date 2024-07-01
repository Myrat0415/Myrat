<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Classroom::create([
                'location_id' => 1, // Example location_id, adjust as needed
                'name' => 'Classroom ' . $i,
            ]);
        }
    }
}
