<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HIBPController;
use App\Http\Controllers\admin\ApiController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\client\WebController;
use App\Http\Controllers\admin\EventsController;
use App\Http\Controllers\client\EventController;
use App\Http\Controllers\client\NewsLetterController;


//client routes:
Route::get('/', function () {
    return view('client.index');
});

Route::post('/check-email', [HIBPController::class, 'checkEmail'])->name('check-email');

Route::prefix('api')->controller(ApiController::class)->group(function() {
    Route::get('events', 'events')->name('events');
    Route::get('news', 'news')->name('news');
    Route::get('images', 'images')->name('eventimages');

});

Route::prefix('web')->controller(WebController::class)->group(function() {
    Route::get('index', 'index')->name('web.index');
    Route::get('learn','learn')->name('web.learn');
    Route::get('events','events')->name('web.events');
    Route::get('solution', 'solution')->name('web.solution');
    Route::get('about','about')->name('web.about');
    Route::get('faq', 'faq')->name('web.faq');
    Route::post('query','query')->name('web.query');

});


Route::prefix('event')->controller(EventController::class)->group(function() {
    Route::get('/{id}/register', 'register')->name('event.register');
    Route::post('store', 'store')->name('event.store');


});
Route::prefix('feed')->controller(NewsLetterController::class)->group(function() {
    Route::post('user', 'user')->name('feed.subscription');
    Route::get('NewsMails', 'NewsMails')->name('NewsMails');


});


//Admin routes:

Route::get('/admin', function () {
    return redirect()->route('login');
});

    // Route::view('/home', 'home')->name('admin.home');


    // Route::get('/home', function () {
    //     return view('home');
    // })->name('admin.home');
        
    

    Route::prefix('admin/news')->middleware('auth')->controller(NewsController::class)->group(function() {
        Route::get('/get', 'get')->name('admin.news.get');
        Route::get('/', 'index')->name('admin.news.index');
        Route::get('/search', 'search')->name('admin.news.search');
        Route::get('/show/{article}','show')->name('admin.news.show');
        Route::get('/sendmail','sendmail')->name('admin.news.mail');
        Route::get('/delete/{article}','delete')->name('admin.news.delete');
    });

    Route::get('/home', function () {
        return view('admin.index');
    })->name('admin.home')->middleware('auth');

    Route::prefix('admin/events')->middleware('auth')->controller(EventsController::class)->group(function() {
        Route::get('/', 'index')->name('admin.events.index');
        Route::get('/create', 'create')->name('admin.events.create');
        Route::post('/store', 'store')->name('admin.events.store');
        Route::get('/show/{event}', 'show')->name('admin.events.show');
        Route::get('/history', 'history')->name('admin.events.history');
        Route::get('/{event}/historyStore', 'historyStore')->name('admin.events.delete');
        Route::get('/user', 'user')->name('admin.subscribed-user');
    });
