<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppointedService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'address' => 'required',
            'sid' => 'required'
            // 'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        try {
            //code...
            $check = AppointedService::where('user_id', $id)->first();

            if ($check) {
                # code...
                if ($check->service_id == $request->sid) {
                    # code...

                    return response()->json([
                        'status' => false,
                        'message' => 'Already booked!'
                    ]);
                }
            }

            $checkDate = Service::where('id', $request->sid)
                ->whereDate('start_available_date', '>', $request->date)
                ->whereDate('end_available_date', '<', $request->date)
                ->first();

            if (!$checkDate) {
                $appoint  = new AppointedService();

                $appoint->user_id = $id;
                $appoint->service_id = $request->sid;
                $appoint->date = $request->date;
                $appoint->address = $request->address;
                $appoint->status = 'In Proggress';

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
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Please select a valid date!'
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
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
