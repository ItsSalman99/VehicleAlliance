<?php

namespace Database\Seeders;

use App\Models\Reward;
use Illuminate\Database\Seeder;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if(Reward::count() == 0)
        {
            Reward::create([
                'name' => '10% Discount Voucher'
            ]);
            Reward::create([
                'name' => '20% Discount Voucher'
            ]);
            Reward::create([
                'name' => '10% Discount Voucher'
            ]);
            Reward::create([
                'name' => '100 Rs Discount Voucher'
            ]);
        }

    }
}
