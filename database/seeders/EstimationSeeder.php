<?php

namespace Database\Seeders;

use App\Models\Estimation;
use Illuminate\Database\Seeder;

class EstimationSeeder extends Seeder
{

    public function run()
    {
        if (Estimation::count() == 0) {
            Estimation::create([
                'type' => 'service',
                'min_est' => '500',
                'max_est' => '1000',
                // 'vehicle_name' => 'Suzuki Mehran',
                // 'model_name' => '2021',
                // 'issue' => 'Overheating'
                'vehicle_id' => 1,
                'model_id' => 1,
                'issue_id' => 1
            ]);
            Estimation::create([
                'type' => 'service',
                'min_est' => '2000',
                'max_est' => '4000',
                // 'vehicle_name' => 'Suzuki Alto',
                // 'model_name' => '2021',
                // 'issue' => 'Transmission Issue'
                'vehicle_id' => 2,
                'model_id' => 1,
                'issue_id' => 2
            ]);
            Estimation::create([
                'type' => 'service',
                'min_est' => '3000',
                'max_est' => '5000',
                // 'vehicle_name' => 'Suzuki Wagon',
                // 'model_name' => '2021',
                // 'issue' => 'Broken Tail/Head Lights'
                'vehicle_id' => 3,
                'model_id' => 1,
                'issue_id' => 3
            ]);
        }
    }
}
