<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])
            ->name('home');

//Login
Route::get('login', [AuthenticatedSessionController::class, 'create']);

Route::post('login', [AuthenticatedSessionController::class, 'store'])
                ->name('login');
//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Shop
Route::resource('shop', 'App\Http\Controllers\ShopController')->except(['create', 'store', 'edit', 'update', 'destroy']);
//Cart
Route::get('boutique/panier', [ShopController::class, 'createCart'])
            ->name('cart.create');

require __DIR__.'/auth.php';
