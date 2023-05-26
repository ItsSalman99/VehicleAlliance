<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {

            User::create([
                'name' => 'Salman',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'type' => 'admin'
            ]);
            User::create([
                'name' => 'Ahmed Shah',
                'email' => 'salmanabbas985@gmail.com',
                'password' => Hash::make('12345'),
                'type' => 'buyer'
            ]);
            User::create([
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'password' => Hash::make('12345'),
                'type' => 'seller'
            ]);

        }
    }
}
