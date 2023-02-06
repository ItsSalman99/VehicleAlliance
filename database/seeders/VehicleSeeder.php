<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Vehicle::count() == 0) {

            Vehicle::create([
                'name' => 'Suzuki Mehran',
                'model_id' => 1
            ]);
            Vehicle::create([
                'name' => 'Toyota Corolla',
                'model_id' => 2
            ]);
            Vehicle::create([
                'name' => 'Suzuki Wagon R',
                'model_id' => 2
            ]);
            Vehicle::create([
                'name' => 'Honda City',
                'model_id' => 3
            ]);
            Vehicle::create([
                'name' => 'Nissan Note',
                'model_id' => 4
            ]);

        }
    }
}
