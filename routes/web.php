<?php

use App\Http\Controllers\EstimationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleIssueController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


//Estimation Vehicle
Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicle.index');
Route::get('/add-vehicles', [VehicleController::class, 'create'])->name('vehicle.create');
Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');

//Vehicle Issues
Route::get('vehicles-issues', [VehicleIssueController::class, 'index'])->name('vehicle.issues.index');
Route::get('vehicles/add-issues', [VehicleIssueController::class, 'create'])->name('vehicle.issues.create');
Route::post('vehicles/storeissues', [VehicleIssueController::class, 'store'])->name('vehicle.issues.store');

//Estimation
Route::get('all-estimattion', [EstimationController::class, 'index'])->name('estimation.index');
Route::get('estimattion/issue/create', [EstimationController::class, 'createIssueEstimation'])->name('estimation.issue');
Route::post('estimation/issue/store', [EstimationController::class, 'storeIssueEstimation'])->name('estimation.issue.store');

//Services
Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');

//Slider
Route::get('slider/manage', [SliderController::class, 'create'])->name('slider.create');
Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');

//Users
Route::get('/all-users', [UserController::class,'index'])->name('users.index');

Route::get('/dashboard', function () {
    $admins  = User::where('type', 'admin')->count();
    $seller  = User::where('type', 'seller')->count();
    $buyer  = User::where('type', 'buyer')->count();

    return view('backend.index', compact('admins', 'seller', 'buyer'));

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
