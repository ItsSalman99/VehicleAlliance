<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PollController;
use App\Http\Controllers\AppointedServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstimationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffServiceAppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleIssueController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\VehicleBiddingController;
use App\Models\Estimation;
use App\Models\Service;
use App\Models\StaffServiceAppointment;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Estimation Vehicle
    Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/add-vehicles', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicles/delete/{id}', [VehicleController::class, 'delete'])->name('vehicle.delete');

    Route::get('/edit-vehicles/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::post('/vehicle/update/{id}', [VehicleController::class, 'update'])->name('vehicle.update');

    //Vehicle Issues
    Route::get('vehicles-issues', [VehicleIssueController::class, 'index'])->name('vehicle.issues.index');
    Route::get('vehicles/add-issues', [VehicleIssueController::class, 'create'])->name('vehicle.issues.create');
    Route::post('vehicles/storeissues', [VehicleIssueController::class, 'store'])->name('vehicle.issues.store');
    Route::get('vehicles/issue/edit/{id}', [VehicleIssueController::class, 'edit'])->name('vehicle.issues.edit');
    Route::post('vehicles/issue/update/{id}', [VehicleIssueController::class, 'update'])->name('vehicle.issues.update');
    Route::get('vehicles/issue/delete/{id}', [VehicleIssueController::class, 'delete'])->name('vehicle.issues.delete');

    //Estimation
    Route::get('all-estimattion', [EstimationController::class, 'index'])->name('estimation.index');
    Route::get('estimattion/issue/create', [EstimationController::class, 'createIssueEstimation'])->name('estimation.issue');
    Route::post('estimation/issue/store', [EstimationController::class, 'storeIssueEstimation'])->name('estimation.issue.store');
    Route::get('estimation/issue/delete/{id}', [EstimationController::class, 'delete'])->name('estimation.issue.delete');

    //Services
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('services/destroy/{id}', [ServiceController::class, 'delete'])->name('services.delete');

    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');

    //Slider
    Route::get('slider/manage', [SliderController::class, 'create'])->name('slider.create');
    Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');

    //Users
    Route::get('/all-users', [UserController::class,'index'])->name('users.index');
    Route::get('/user/destroy/{id}', [UserController::class,'delete'])->name('users.delete');

    Route::get('/manage-shop', [ShopController::class, 'create'])->name('manage-shop');
    Route::post('/manage-shop/store', [ShopController::class, 'store'])->name('shop.store');

    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

    Route::get('/all-subscriptions', [UserSubscriptionController::class,'index'])->name('subscriptions.index');


    Route::get('/all-polls', [PollController::class,'index'])->name('poll.index');

    Route::get('staffs', [StaffController::class, 'index'])->name('staffs.index');
    Route::get('staffs/create', [StaffController::class, 'create'])->name('staffs.create');
    Route::post('staffs/store', [StaffController::class, 'store'])->name('staffs.store');
    Route::get('staffs/delete/{id}', [StaffController::class, 'delete'])->name('staffs.delete');

    Route::get('/appointments', [AppointedServicesController::class, 'index'])->name('appointments.index');
    Route::post('/appointments/assign', [AppointedServicesController::class, 'assignStaff'])->name('appointments.assign');


    Route::get('/my-appointments', [StaffServiceAppointmentController::class, 'index'])->name('staff.appointments');
    Route::post('/my-appointments/status/{id}', [StaffServiceAppointmentController::class, 'changeStatus'])->name('staff.appointments.status');
    Route::post('/my-appointments/cancel/{id}', [StaffServiceAppointmentController::class, 'chancelAppointment'])->name('staff.appointments.cancel');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/show/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/status/{id}', [OrderController::class, 'changeStatus'])->name('orders.status');

    Route::get('/rewards', [RewardController::class, 'index'])->name('rewards.index');
    Route::get('/rewards/create', [RewardController::class, 'create'])->name('rewards.create');
    Route::post('/rewards/store', [RewardController::class, 'store'])->name('rewards.store');

	Route::get('/fuels', [FuelController::class, 'index'])->name('fuels.index');
	Route::get('/fuels/create', [FuelController::class, 'create'])->name('fuels.create');
	Route::post('/fuels/store', [FuelController::class, 'store'])->name('fuels.store');
	Route::post('/fuels/delete/{id}', [FuelController::class, 'delete'])->name('fuels.delete');

	Route::get('/fuels/requests', [FuelController::class, 'fuelRequest'])->name('fuelsrequests.index');
	Route::get('/fuels/delivered/{id}', [FuelController::class, 'deliveredRequestStatus'])->name('fuelsrequests.delivered');
	Route::get('/fuels/cancel/{id}', [FuelController::class, 'cancelRequestStatus'])->name('fuelsrequests.cancel');
	Route::get('/fuels/requests', [FuelController::class, 'fuelRequest'])->name('fuelsrequests.index');

    Route::get('/bidding/vehicles', [VehicleBiddingController::class, 'index'])->name('biddings.index');
    Route::get('/bidding/vehicles/create', [VehicleBiddingController::class, 'create'])->name('biddings.create');
    Route::post('/bidding/vehicles/store', [VehicleBiddingController::class, 'store'])->name('biddings.vehicles.store');
    Route::get('/bidding/vehicles/show/{id}', [VehicleBiddingController::class, 'show'])->name('biddings.show');
    Route::get('/bidding/vehicles/edit/{id}', [VehicleBiddingController::class, 'edit'])->name('biddings.edit');
    Route::post('/bidding/vehicles/update/{id}', [VehicleBiddingController::class, 'update'])->name('biddings.vehicles.update');
    Route::get('/bidding/vehicles/delete/{id}', [VehicleBiddingController::class, 'delete'])->name('biddings.vehicles.delete');
    Route::get('/bidding/vehicles/confirm/{id}', [VehicleBiddingController::class, 'confirmed'])->name('biddings.vehicles.confirm');

    //ajax
    Route::get('/getAllStaffs', [AppointedServicesController::class, 'getAllStaffs']);



});


Route::get('verified/{id}', [AuthController::class, 'verifyAccount'])->name('verifyAccount');
Route::get('privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('terms-conditions', [HomeController::class, 'terms'])->name('terms');

require __DIR__.'/auth.php';
