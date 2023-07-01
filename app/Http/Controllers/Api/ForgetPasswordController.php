<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ForgetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgetPasswordController extends Controller
{
    public function sendOtp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        try {

            $user = User::where('email', $request->email)->first();

            if ($user) {

                $otp = rand(0000, 9999);

                $user->token = $otp;
                $user->save();

                $data = [
                    'email' => $request->email,
                    'otp' => $otp
                ];

                Mail::to($request->email)->send(new ForgetPassword($data));

                return response()->json([
                    'status' => true,
                    'msg' => 'Otp has been send to your email'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Please enter correct email address, this email does not associated to any account!'
                ]);
            }
        } catch (\Throwable $th) {

            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
            ]);
        }
    }

    public function checkOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'otp' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        try {

            $user = User::where('email', $request->email)->first();

            if ($user) {

                if ($user->token == $request->otp) {
                    return response()->json([
                        'status' => true,
                        'msg' => 'Otp has been matched!'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'msg' => 'Otp does not matched!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Something went wrong!'
                ]);
            }
        } catch (\Throwable $th) {

            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
            ]);
        }
    }

    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        try {

            $user = User::where('email', $request->email)->first();

            if ($user) {

                $user->password = Hash::make($request->password);
                $user->save();


                return response()->json([
                    'status' => true,
                    'msg' => 'Password changed successfully!'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Something went wrong!'
                ]);
            }
        } catch (\Throwable $th) {

            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
            ]);
        }
    }
}
