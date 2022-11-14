<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\TestController;

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
    return view('backend.pagees.dashboard');
})->name('admin');

Route::get('/dashboard-panel',[DashboardController::class,'dashboard_panel']);


Route::get('/dashboard-admin',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/servicees/doctor-admin',[ServiceController::class,'doctor'])->name('doctor');

Route::get('/patient-admin',[CategoryController::class,'patient'])->name('patient');

Route::get('/prescribe-admin',[CategoryController::class,'prescribe'])->name('prescribe');

Route::get('/admit-admin',[CategoryController::class,'admit'])->name('admit');

Route::get('/amount-admin',[CategoryController::class,'amount'])->name('amount');

Route::get('/create-service',[ServiceController::class,'cerateForm'])->name('service.form');

Route::get('/update-service',[ServiceController::class,'updateForm'])->name('update.form');

Route::get('/testname-admin',[TestController::class,'testname'])->name('testname');

Route::get('/add-admin',[TestController::class,'add'])->name('add');
Route::get('/stokMet',[TestController::class,"stokemetarial"])->name('stokemetarial');

