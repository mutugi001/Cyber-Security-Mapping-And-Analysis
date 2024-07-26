<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('events',[ApiController::class,'getEventData']);
Route::prefix('v2')->controller(ApiController::class)->group(function() {
    Route::get('NewsMails', 'NewsMails')->name('NewsMails');
    
});

