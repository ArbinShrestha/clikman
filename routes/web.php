<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FixerController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\GearController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeSettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
    Route::resource('homeSetting',HomeSettingController::class);
    Route::resource('aboutUs',AboutUsController::class);
    Route::resource('team',TeamController::class);
    Route::resource('films',FilmController::class);
    Route::resource('frames',FrameController::class);
    Route::resource('gear',GearController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('fixers',FixerController::class);
    Route::resource('setting',SettingController::class);


});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);



