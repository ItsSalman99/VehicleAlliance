<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EstimationController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);


Route::get('services/getAll', [ServiceController::class, 'getAll']);
Route::get('slider/getAll', [SliderController::class, 'getAll']);

Route::post('profile/update/{id}', [ProfileController::class, 'update']);

Route::get('estimation/service/all', [EstimationController::class, 'getServiceEstimate']);
