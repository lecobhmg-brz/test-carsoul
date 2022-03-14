<?php

use App\Http\Controllers\CarshoppingController;
use App\Http\Controllers\DepartmentController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/carshoppings/', [CarshoppingController::class, 'index']);
Route::post('/carshoppings/', [CarshoppingController::class, 'store']);
Route::post('/carshoppings/{car_id}/departments/add/{dep_id}', [CarshoppingController::class, 'store_department']);
Route::get('/carshoppings/{document}', [CarshoppingController::class, 'show']);
Route::get('/carshoppings/departments/{slug}', [CarshoppingController::class, 'findBy']);
Route::put('/carshoppings/{id}', [CarshoppingController::class, 'update']);
Route::delete('/carshoppings/{id}', [CarshoppingController::class, 'destroy']);
Route::get('/departments/', [DepartmentController::class, 'index']);
Route::post('/departments/', [DepartmentController::class, 'store']);
Route::get('/departments/{slug}', [DepartmentController::class, 'show']);
Route::get('/departments/carshoppings/{document}', [DepartmentController::class, 'findBy']);
Route::put('/departments/{id}', [DepartmentController::class, 'update']);
Route::delete('/departments/{id}', [DepartmentController::class, 'destroy']);