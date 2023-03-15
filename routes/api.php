<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //Artwork
    Route::get('categories/{id}', [ArtworkController::class, 'categories']);
});

//Cart
Route::apiResource('artworks', CartController::class);
Route::get('products/increase/{id}', [CartController::class, 'increase']);
Route::get('products/decrease/{id}', [CartController::class, 'decrease']);