<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create(['name' => 'Location 1']);
        Location::create(['name' => 'Location 2']);
        Location::create(['name' => 'Location 3']);
    }
}
