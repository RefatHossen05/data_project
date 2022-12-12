<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\AdmitController;
use App\Http\Controllers\backend\RogiController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\AdmissionController;


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
Route::get('/patient-delete/{id}',[RogiController::class,'delete'])->name('delete');
Route::get('/patient-updateform/{id}',[RogiController::class,'updateform'])->name('updateform');
Route::put('/patient-update/{id}',[RogiController::class,'update'])->name('patient.update');




                            #CategoryController

Route::get('/admit-admin',[CategoryController::class,'admit'])->name('admit');


Route::get('/amount',[CategoryController::class,'totalamount'])->name('amount');
Route::get('/amount-create',[CategoryController::class,'amountcreate'])->name('amount.form');
Route::post('/amount-create-submit',[CategoryController::class,'store'])->name('amount.submit');




                            #AdmitController

Route::get('/admitedcreate',[AdmitController::class,'admitedcreate'])->name('admit.create');
Route::get('/admitedform',[AdmitController::class,'admitedform'])->name('admit.form');
Route::post('/admitedstore',[AdmitController::class,'store'])->name('admit.store');
Route::get('/admited-deleted/{id}',[AdmitController::class,'delete'])->name('admit.delete');
Route::get('/admited-updateform/{id}',[AdmitController::class,'updateform'])->name('admitedupdate.form');
Route::put('/admited-update/{id}',[AdmitController::class,'update'])->name('admited.update');





                            #ServiceController
Route::get('/servicees',[ServiceController::class,'show'])->name('doctor');
Route::get('/create-service',[ServiceController::class,'cerateForm'])->name('service.form');
Route::get('/update-service',[ServiceController::class,'updateForm'])->name('update.form');
Route::post('/storedata',[ServiceController::class,'store'])->name('store.data');
Route::get('/doctorlist-delete/{id}',[ServiceController::class,'delete'])->name('doctordate.delete');
Route::get('/doctorlist-updateform/{id}',[ServiceController::class,'updateform'])->name('doctorlist.updateform');
Route::put('/doctorlist.update/{id}',[ServiceController::class,'update'])->name('update');





                            #TestController
Route::get('/testname',[TestController::class,'testname'])->name('testname');
Route::get('/testname-create',[TestController::class,'testform'])->name('add.testname');
Route::post('/testname-submit',[TestController::class,'testnamestore'])->name('testname.submit');
Route::get('/testname-delete/{id}',[TestController::class,'labdrop'])->name('testname.delete');
Route::get('/testname-updateform/{id}',[TestController::class,'testupdateform'])->name('test.updateform');
Route::put('/testname-update/{id}',[TestController::class,'testnaemupdate'])->name('test.update');




Route::get('/report',[TestController::class,'reportlist'])->name('reprot.list');
Route::get('/report-form',[TestController::class,'reportform'])->name('add.form');
Route::post('/report-store',[TestController::class,'reportstore'])->name('report.store');
Route::get('/report-drop/{id}',[TestController::class,'tabledelete'])->name('table.delete');
Route::get('/report-updateform/{id}',[TestController::class,'updateform'])->name('report.updateform');
Route::put('/report-update/{id}',[TestController::class,'update'])->name('report.update');




                            #AppoinmentController
Route::get('/appointmentlist',[AppointmentController::class,'appointmentlist'])->name('appointment.list');
Route::get('/appointmentform',[AppointmentController::class,'appointmentform'])->name('appointment.form');
Route::post('/appointmentstore',[AppointmentController::class,'appointmentstore'])->name('appointment.store');
Route::get('/appointmentdelete/{id}',[AppointmentController::class,'appointmentdelete'])->name('appointment.delete');
Route::get('/appointmenteditform/{id}',[AppointmentController::class,'appointmentedit'])->name('appointment.edit');
Route::put('appointmentupdate/{id}',[AppointmentController::class,'appointmentupdate'])->name('appointment.update');



                                #AdmissionController
Route::get('/admissionlist',[AdmissionController::class,'admissionlist'])->name('admission.list');
Route::get('/admissionform',[AdmissionController::class,'admissionform'])->name('admission.form');
Route::post('/admissionstore',[AdmissionController::class,'admissionstore'])->name('admission.store');