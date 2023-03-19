<?php

use App\Http\Controllers\Api\PollController;
use App\Http\Controllers\EstimationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleIssueController;
use App\Models\Estimation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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

//Estimation
Route::get('all-estimattion', [EstimationController::class, 'index'])->name('estimation.index');
Route::get('estimattion/issue/create', [EstimationController::class, 'createIssueEstimation'])->name('estimation.issue');
Route::post('estimation/issue/store', [EstimationController::class, 'storeIssueEstimation'])->name('estimation.issue.store');

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

Route::get('/dashboard', function () {
    $admins  = User::where('type', 'admin')->count();
    $seller  = User::where('type', 'seller')->count();
    $buyer  = User::where('type', 'buyer')->count();
    $services = Service::get()->take(10);
    $estimations = Estimation::get()->take(10);
    $users = User::get()->take(10);

    return view('backend.index', compact('admins', 'seller', 'buyer', 'services', 'estimations', 'users'));

})->middleware(['auth'])->name('dashboard');

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

require __DIR__.'/auth.php';
