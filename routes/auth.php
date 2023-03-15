<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ExposureController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    //Inscription en plusieurs étapes
    Route::get('register/step-one', [RegisteredUserController::class, 'createStepOne'])
                ->name('register');
    Route::post('register/step-one', [RegisteredUserController::class, 'storeStepOne']);

    Route::get('register/step-two', [RegisteredUserController::class, 'createStepTwo'])
                ->name('registerStepTwo');
    Route::post('register/step-two', [RegisteredUserController::class, 'storeStepTwo']);

    Route::get('register/step-three', [RegisteredUserController::class, 'createStepThree'])
                ->name('registerStepThree');
    Route::post('register/step-three', [RegisteredUserController::class, 'storeStepThree']);
    //Paiement en plusieurs étapes
    Route::get('order/step-one', [OrderController::class, 'createStepOne'])
                ->name('order');
    Route::post('order/step-one', [OrderController::class, 'storeStepOne']);

    Route::get('order/step-two', [OrderController::class, 'createStepTwo'])
                ->name('orderStepTwo');
    Route::post('order/step-two', [OrderController::class, 'storeStepTwo']);

    Route::get('order/step-three', [OrderController::class, 'createStepThree'])
                ->name('orderStepThree');

    Route::get('order/step-four', [OrderController::class, 'createStepFour'])
                ->name('orderStepFour');
    Route::post('order/step-four', [OrderController::class, 'storeStepFour']);
    
    //
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    //
    Route::resources([
        'oeuvres' => ArtworkController::class
    ]);
    //Exposures
    Route::resource('expositions', 'App\Http\Controllers\ExposureController')->except(['create', 'store']);
    Route::get('expositions/create/step-one', [ExposureController::class, 'createStepOne'])
                ->name('exposureStepOne');
    Route::post('expositions/create/step-one', [ExposureController::class, 'storeStepOne']);

    Route::get('expositions/create/step-two', [ExposureController::class, 'createStepTwo'])
                ->name('exposureStepTwo');
    Route::post('expositions/create/step-two', [ExposureController::class, 'storeStepTwo']); 
});
