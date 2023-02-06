<?php

namespace Database\Seeders;

use App\Models\VehicleIssue;
use Illuminate\Database\Seeder;

class IssuesSeeder extends Seeder
{
    public function run()
    {
        if (VehicleIssue::count() == 0) {
            VehicleIssue::create([
                'name' => 'Car Ac Problem'
            ]);
            VehicleIssue::create([
                'name' => 'Car Transmission Issue'
            ]);
            VehicleIssue::create([
                'name' => 'Bike Gear Issue'
            ]);
            VehicleIssue::create([
                'name' => 'Car Milage Problem'
            ]);
        }
    }
}
