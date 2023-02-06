<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppointedService;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAll()
    {

        $services = Service::all();

        return response()->json([
            'services' => $services
        ]);
    }

    public function appoint(Request $request, $id)
    {

        // return response()->json([
        //     'status' => true,
        //     'data' => $request->sid . ' - ' . $id,
        //     'msg' => 'Service has been booked!'
        // ]);

        $check = AppointedService::where('user_id', $id)->first();

        if ($check) {
            # code...
            if ($check->service_id == $request->service_id) {
                # code...

                return response()->json([
                    'status' => false,
                    'data' => 'Already in progress!'
                ]);

            }
        }

        $appoint  = new AppointedService();

        $appoint->user_id = $id;
        $appoint->service_id = $request->sid;

        $appoint->save();

        if ($appoint) {

            return response()->json([
                'status' => true,
                'data' => $appoint,
            ]);
        }

        return response()->json([
            'status' => false,
            'data' => 'Something went wrong!'
        ]);
    }

    public function getAppointmentsByUser($id)
    {

        $appoints = AppointedService::where('user_id', $id)->with(['user', 'service'])->get();
        $services = [];
        foreach ($appoints as $key => $value) {
            # code...
            $services = $value->service;
        }

        return response()->json([
            'status' => true,
            'data' => $appoints
        ]);
    }
}
