<?php

use App\Http\Controllers\Forms\ConsultationFormController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(ConsultationFormController::class)
    ->prefix('ajax')
    ->group(function () {
        Route::get('consultationForm',  'render')->name('renderForm');
        Route::post('postConsultationForm',  'validateForm')->name('validateForm');
        Route::get('responseForm', 'responseForm')->name('responseForm');
    });
