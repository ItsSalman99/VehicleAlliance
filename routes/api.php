<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EstimationController;
use App\Http\Controllers\Api\PollController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\VehicleIssueController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\VehicleModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);


Route::get('services/getAll', [ServiceController::class, 'getAll']);
Route::post('service/appoint/{id}', [ServiceController::class, 'appoint']);

Route::get('user/get-appointments/{id}', [ServiceController::class, 'getAppointmentsByUser']);

Route::get('slider/getAll', [SliderController::class, 'getAll']);

Route::post('profile/update/{id}', [ProfileController::class, 'update']);

Route::get('estimation/service/{vehicle}/{model}/{issue}', [EstimationController::class, 'getServiceEstimate']);

Route::get('/products', [ProductController::class, 'getAll']);


Route::get('vehicles/getAll', [VehicleController::class, 'getAll']);
Route::get('vehicles/models/getAll', [VehicleModelController::class, 'getAll']);
Route::get('vehicles/issues/getAll', [VehicleIssueController::class, 'getAll']);

Route::get('fuel/getAll', [FuelController::class, 'getAll']);

Route::get('poll/getAll', [PollController::class, 'getAll']);
Route::post('poll/store', [PollController::class, 'store'])->name('poll.store');
Route::get('poll/upVote/{id}', [PollController::class, 'upVote']);

Route::get('notifications', [NotificationController::class, 'getAll']);

Route::post('subscribe', [UserSubscriptionController::class, 'store']);
