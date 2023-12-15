<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('event', [EventController::class, 'index']);
    Route::get('add-event', [EventController::class, 'create']);
    Route::post('add-event', [EventController::class, 'store']);
    Route::get('edit-event/{event_id}', [EventController::class, 'edit']);
    Route::put('update-event/{event_id}', [EventController::class, 'update']);
    Route::get('delete-event/{event_id}', [EventController::class, 'destroy']);

    Route::get('bookings', [BookingController::class, 'index']);
    Route::get('booking/{booking_id}/show', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('booking/{booking_id}', [BookingController::class, 'edit']);
    Route::put('update-booking/{booking_id}', [BookingController::class, 'update']);
    Route::get('delete-booking/{booking_id}', [BookingController::class, 'destroy']);

    Route::get('inquiry', [InquiryController::class, 'index']);
    Route::get('show-inquiry/{inquiry_id}', [InquiryController::class, 'show']);
    Route::get('delete-inquiry/{booking_id}', [InquiryController::class, 'destroy']);


    Route::get('users', [UserController::class, 'index']);
    Route::get('user/{user_id}', [UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [UserController::class, 'update']);

    Route::get('count', [CountController::class, 'index']);
    Route::get('add-count-secret', [CountController::class, 'create']);
    Route::post('add-count-secret', [CountController::class, 'store']);
    Route::get('edit-count/{count_id}', [CountController::class, 'edit']);
    Route::put('update-count/{count_id}', [CountController::class, 'update']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('add-booking', [BookingController::class, 'create']);
    Route::post('add-booking', [BookingController::class, 'store']);
});


Route::get('add-inquiry', [InquiryController::class, 'create']);
Route::post('add-inquiry', [InquiryController::class, 'store']);
