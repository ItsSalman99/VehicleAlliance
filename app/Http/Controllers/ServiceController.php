<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        // dd($request->img->getClientOriginalName());

        if ($request->hasFile('img')) {

            $filename = $request->name . '_'  . $request->img->getClientOriginalName();

            $request->img->move(public_path('assets/frontend/img/uploads/services/'), $filename);
        }

        $service = new Service();

        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->available_stime = $request->stime;
        $service->available_etime = $request->etime;
        $service->img = 'assets/frontend/img/uploads/services/' . $filename;
        $service->start_available_date = Carbon::createFromDate($request->sdate);
        $service->end_available_date = Carbon::createFromDate($request->edate);

        $service->save();

        toast("New service uploaded", "success");

        return redirect()->back();
    }

    public function edit($id)
    {

        $service = Service::where('id', $id)->first();

        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {



        $service = Service::where('id', $id)->first();
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->available_stime = $request->stime;
        $service->available_etime = $request->etime;
        if ($request->hasFile('img')) {

            $filename = $request->name . '_'  . $request->img->getClientOriginalName();

            $request->img->move(public_path('assets/frontend/img/uploads/services/'), $filename);
            $service->img = 'assets/frontend/img/uploads/services/' . $filename;
        }
        $service->start_available_date = Carbon::createFromDate($request->sdate);
        $service->end_available_date = Carbon::createFromDate($request->edate);

        $service->save();

        toast("Service Updated Successfully!", "success");

        return redirect()->back();
    }

    public function delete($id)
    {

        $service = Service::where('id', $id)->first();

        $service->delete();


        toast("Service Deleted Successfully!", "success");

        return redirect()->back();
    }
}
