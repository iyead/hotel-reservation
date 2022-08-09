<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\ReservationController;

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
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth', 'prefix' => 'admin', 'as'=> 'admin.'],function () {
    Route::resource('/resorts', Controllers\ResortController::class);
    Route::resource('/resorts/{resort}/reservations', Controllers\ReservationController::class)->only('index','create','store');
});

Route::prefix('resorts')->group(function(){
    Route::get('/',[ResortController::class,'index'])->name('resorts.index');
    Route::get('/create',[ResortController::class,'create'])->name('resorts.create');
    Route::post('/store',[ResortController::class,'store'])->name('resorts.store');
    Route::get('/show/{id}',[ResortController::class,'show'])->name('resorts.show');
    Route::get('/edit/{id}',[ResortController::class,'edit'])->name('resorts.edit');
    Route::post('/update/{id}',[ResortController::class,'update'])->name('resorts.update');
    Route::get('/delete/{id}',[ResortController::class,'delete'])->name('resorts.delete');
});

Route::prefix('reservations')->group(function(){
    Route::get('/',[ReservationController::class,'index'])->name('reservations.index');
    Route::get('/create',[ReservationController::class,'create'])->name('reservations.create');
    Route::post('/store',[ReservationController::class,'store'])->name('reservations.store');
});