<?php

namespace Database\Seeders;

use App\Models\UserNotification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (UserNotification::count()) {
            UserNotification::create([
                'title' => 'Sign in',
                'msg'  => 'You logged in recently',
                'user_id' => 1
            ]);
            UserNotification::create([
                'title' => 'Sign in',
                'msg'  => 'You logged in recently',
                'user_id' => 2
            ]);
            UserNotification::create([
                'title' => 'Sign in',
                'msg'  => 'You logged in recently',
                'user_id' => 3
            ]);
        }
    }
}
