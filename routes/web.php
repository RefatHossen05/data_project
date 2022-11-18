<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\AdmitController;
use App\Http\Controllers\backend\RogiController;


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


                            #DashboardController
Route::get('/dashboard-panel',[DashboardController::class,'dashboard_panel']);
Route::get('/dashboard-admin',[DashboardController::class,'dashboard'])->name('dashboard');


                            #RogiController
Route::get('/patient-info',[RogiController::class,'information'])->name('ptninfo.info');
Route::get('/patient-create',[RogiController::class,'list'])->name('list');
Route::post('/patient-submit',[RogiController::class,'submit_data'])->name('submitdata');



                            #CategoryController
Route::get('/prescribe-prescribe',[CategoryController::class,'prescribe'])->name('prescribe');
Route::get('/admit-admin',[CategoryController::class,'admit'])->name('admit');
Route::get('/amount',[CategoryController::class,'totalamount'])->name('amount');
Route::get('/amount-create',[CategoryController::class,'amountcreate'])->name('amount.form');




                            #AdmitController
Route::get('/admit-bad',[AdmitController::class,'bad'])->name('admit.bad');
Route::get('/admit-cavin',[AdmitController::class,'cavin'])->name('admit.cavin');







                            #ServiceController
Route::get('/servicees',[ServiceController::class,'show'])->name('doctor');
Route::get('/create-service',[ServiceController::class,'cerateForm'])->name('service.form');
Route::get('/update-service',[ServiceController::class,'updateForm'])->name('update.form');
Route::post('/storedata',[ServiceController::class,'store'])->name('store.data');




                            #TestController
Route::get('/addmeterial',[TestController::class,'add'])->name('add');
Route::get('add-create',[TestController::class,'list'])->name('add.form');
Route::get('/stokemetarial',[TestController::class,'stokemetarial'])->name('stokemetarial');
Route::get('metarial-create',[TestController::class,'smet'])->name('add.metarifalform');
Route::get('/testname',[TestController::class,'testname'])->name('testname');
Route::get('testname-create',[TestController::class,'tprice'])->name('add.testname');



