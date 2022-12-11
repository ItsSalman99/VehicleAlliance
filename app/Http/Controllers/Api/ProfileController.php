<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $check = Hash::check($request->password, $user->password);

        if (!$check) {
            return response()->json([
                'status' => 200,
                'message' => 'Password doesnt matched!'
            ]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Profile has been updated!'
        ]);

    }
}
