<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);

        return view('backend.users.index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();

        $user->delete();

        toast("User Has Been Deleted Successfully!");

        return redirect()->back();

    }

}
