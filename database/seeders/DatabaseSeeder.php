<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(IssuesSeeder::class);
        $this->call(VehicleModelSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(EstimationSeeder::class);
        // $this->call(ProductSeeder::class);
        $this->call(FuelSeeder::class);
    }
}
