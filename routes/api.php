<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// Public Routes
Route::post('/search-products', [ProductController::class, 'search']);
Route::get('/products-details', [ProductController::class, 'productPharmacyDetails']);
Route::post('/update-product', [ProductController::class, 'update']);
Route::post('/delete-product', [ProductController::class, 'destroy']);
Route::post('/create-product', [ProductController::class, 'store']);

// Protected Routes
Route::group(['middleware' => 'auth:sanctum'], function () {
  //
});
