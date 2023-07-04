<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/


/*API PROJECT FULL STACK*/

Route::get("/clients",[ProjectController::class,'read']);

Route::post("/client",[ProjectController::class,'create']);

Route::put("/client",[ProjectController::class,'update']);

Route::delete("/client",[ProjectController::class,'delete']);