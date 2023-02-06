<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Fuel::count() == 0) {
            Fuel::create([
                'name' => 'Petrol',
                'price' => '224'
            ]);
            Fuel::create([
                'name' => 'Diesel',
                'price' => '227.80'
            ]);
        }
    }
}
