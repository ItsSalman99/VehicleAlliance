<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;

class StaffController extends Controller
{

    public function index()
    {

        $staffs = User::where('type', 'staff')->get();

        return view('backend.staffs.index', compact('staffs'));

    }

    public function create()
    {
        return view('backend.staffs.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $user = new User();

        $user->name = $request->fname . ' ' . $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 'staff';
        $user->save();

        toast("New Staff Created!!", "success");

        return redirect()->route('staffs.index');

    }

    public function delete($id)
    {
        $staff = User::where('id', $id)->first();

        $staff->delete();

        toast("Staff Deleted Successfully!!", "success");

        return redirect()->back();

    }


}
