<?php

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

Route::get('/', function () {
    return view('login');
});

Route::prefix('admin')->group(function () {
    Route::get('inicio', function () {
        return view('admin.home');
    })->name('admin_home');

    Route::get('eventos', function () {
        return view('admin.events');
    })->name('admin_events');

    Route::get('nuevo_evento', function () {
        return view('admin.new_event');
    })->name('admin_new_event');

    Route::get('estadisticas', function () {
        return view('admin.charts');
    })->name('admin_charts');
});
