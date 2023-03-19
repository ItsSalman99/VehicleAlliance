<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getAll()
    {
        $notifications = Notification::all();

        return response()->json([
            'status' => true,
            'data' => $notifications
        ]);

    }
}
