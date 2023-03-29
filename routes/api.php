<?php

use App\Http\Controllers\API\LocatinController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register/check',[RegisterController::class, 'check'] )->name('api-register-check');
Route::get('provinces',[LocatinController::class, 'provinces'] )->name('api-porvinces');
Route::get('regencies/{province_id}',[LocatinController::class, 'regencies'] )->name('api-regencies');
