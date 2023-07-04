<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        $buyer = User::where('email', $request->email)->first();

        $token = Auth::attempt($credentials);

        if (!$token || $buyer->type != "buyer") {
            return response()->json([
                'status' => 500,
                'message' => 'Unauthorized, Please check your credentials.',
            ]);
        }

        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function register(Request $request)
    {
        // return response()->json([
        //     'status' => true,
        //     'data' => $request->all()
        // ]);
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
              	'phone' => 'required',
                'password' => 'required',
            ]);

            if ($validate->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validate->errors()->first(),
                ]);
            }


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'type' => $request->usertype
            ]);
		
          	$user = User::where('id', $user->id)->first();
          
            // $token = Auth::login($user);

            return response()->json([
                'status' => true,
                'message' => 'User created successfully',
                'user' => $user,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'false',
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function getLoggedIn($id)
    {
        $user = User::where('id', $id)->first();

        try {
            if ($user) {

                return response()->json([
                    'status' => true,
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Invalid Token!!'
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
