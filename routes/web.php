<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\Trip_infosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Add Car information
Route::get('/',[\App\Http\Controllers\CarsController::class,'index']);
Route::post('/',[\App\Http\Controllers\CarsController::class,'store']);
//Add Driver information
Route::get('/drivers',[\App\Http\Controllers\DriversController::class,'create']);
Route::get('cardetails/{id}',[\App\Http\Controllers\DriversController::class,'cardetails']);
Route::post('/drivers',[\App\Http\Controllers\DriversController::class,'store']);
//Add Trip information
Route::get('/trips',[\App\Http\Controllers\TripsController::class,'create']);
Route::post('/trips',[\App\Http\Controllers\TripsController::class,'store']);
//Show Trip Information
Route::get('/showtrips',[\App\Http\Controllers\TripsController::class,'index']);
Route::get('/fetchtrips',[\App\Http\Controllers\TripsController::class,'fetchtrips']);
//Add costing trips
Route::post('/showtrips',[\App\Http\Controllers\TripsController::class,'costing']);
//Show Trip details with destination
Route::get('/tripdetails',[\App\Http\Controllers\Trip_infosController::class, 'index']);

//Get Driver name




