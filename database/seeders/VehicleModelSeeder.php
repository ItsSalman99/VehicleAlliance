<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (VehicleModel::count() == 0) {

            VehicleModel::create([
                'model' => '2022'
            ]);

            VehicleModel::create([
                'model' => '2021'
            ]);

            VehicleModel::create([
                'model' => '2020'
            ]);

            VehicleModel::create([
                'model' => '2019'
            ]);

            VehicleModel::create([
                'model' => '2018'
            ]);

            VehicleModel::create([
                'model' => '2017'
            ]);

            VehicleModel::create([
                'model' => '2016'
            ]);

            VehicleModel::create([
                'model' => '2015'
            ]);

            VehicleModel::create([
                'model' => '2014'
            ]);

            VehicleModel::create([
                'model' => '2013'
            ]);

            VehicleModel::create([
                'model' => '2012'
            ]);

            VehicleModel::create([
                'model' => '2011'
            ]);

            VehicleModel::create([
                'model' => '2010'
            ]);

            VehicleModel::create([
                'model' => '2009'
            ]);

            VehicleModel::create([
                'model' => '2008'
            ]);

            VehicleModel::create([
                'model' => '2007'
            ]);

            VehicleModel::create([
                'model' => '2006'
            ]);

            VehicleModel::create([
                'model' => '2005'
            ]);

            VehicleModel::create([
                'model' => '2004'
            ]);

            VehicleModel::create([
                'model' => '2003'
            ]);

            VehicleModel::create([
                'model' => '2002'
            ]);

            VehicleModel::create([
                'model' => '2001'
            ]);

            VehicleModel::create([
                'model' => '2000'
            ]);

            VehicleModel::create([
                'model' => '1999'
            ]);


        }
    }
}
