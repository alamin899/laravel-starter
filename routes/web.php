<?php

use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/','auth.login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/check-print',function (){
        return view('web.check.check');
    });
});
