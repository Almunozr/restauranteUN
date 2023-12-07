<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\BeneficiarioController;





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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarifa', App\Http\Controllers\TarifaController::class);
Route::resource('campus', App\Http\Controllers\CampusController::class);
Route::resource('beneficiario', App\Http\Controllers\BeneficiarioController::class);
Route::resource('solicitude', App\Http\Controllers\SolicitudeController::class);


//Route::get('/tarifa', [App\Http\Controllers\TarifaController::class, 'index'])->name('tarifa.index');
// Route::get('campus', [App\Http\Controllers\CampusController::class, 'index'])->name('campus.index');
