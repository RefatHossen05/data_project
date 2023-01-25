<?php
                # start backend Controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\AdmitController;
use App\Http\Controllers\backend\RogiController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\AdmissionController;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\backend\WardController;
use App\Http\Controllers\backend\BedController;
use App\Http\Controllers\backend\DiseasesController;

                    #End Backend Controller

                    # Start Frontend Controller
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\AppointmentfrontController;


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


                           

 

                            #AuthController
Route::get('/reg-form',[AuthController::class,'regForm'])->name('regForm');
Route::post('/reg-submit',[AuthController::class,'regsubmit'])->name('regsubmit');
Route::get('/login-form',[AuthController::class,'loginForm'])->name('login');
Route::post('/login-submit',[AuthController::class,'loginsubmit'])->name('loginsubmit');





                                    #Start frontend Route
 Route::get('/',[FrontendController::class,'home'])->name('home.page');
 Route::get('/about_page',[FrontendController::class,'about_page'])->name('about.page');
 Route::get('/doctor_department',[FrontendController::class,'department'])->name('department.page');
 Route::get('/doctor',[FrontendController::class,'doctor'])->name('doctor.page');
 Route::get('/contact',[FrontendController::class,'contact'])->name('contact.page');
 Route::get('/test_type',[FrontendController::class,'test_type'])->name('test.type');




 Route::post('/appointment',[AppointmentfrontController::class,'appointment_submit'])->name('appointment.submit');


                                    #frontend log/reg Route

Route::post('/registration',[LoginController::class,'registration'])->name('reg');
Route::post('/login/submit',[LoginController::class,'submit_login'])->name('login.form');
Route::get('/frontend_logout',[LoginController::class,'frontend_logout'])->name('frontend.logout');




    # Start Backend Route
Route::group(['middleware'=>'chekeadmin'],function(){

 
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');



    Route::get('/admin_panel', function () { 
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
Route::get('/amount',[CategoryController::class,'totalamount'])->name('amount');
Route::get('/amount-create',[CategoryController::class,'amountcreate'])->name('amount.form');
Route::post('/amount-create-submit',[CategoryController::class,'store'])->name('amount.submit');
Route::get('/amountdelete/{id}',[CategoryController::class,'amountdelete'])->name('amount.delete');
Route::get('/amountedit/{id}',[CategoryController::class,'amountedit'])->name('amount.edit');
Route::put('amountupdate/{id}',[CategoryController::class,'amountupdate'])->name('amount.update');




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
Route::put('/testname-update/{id}',[TestController::class,'testnameupdate'])->name('test.update');




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
Route::put('/appointmentupdate/{id}',[AppointmentController::class,'appointmentupdate'])->name('appointment.update');



                                #AdmissionController
Route::get('/admissionlist',[AdmissionController::class,'admissionlist'])->name('admission.list');
Route::get('/admissionform',[AdmissionController::class,'admissionform'])->name('admission.form');
Route::post('/admissionstore',[AdmissionController::class,'admissionstore'])->name('admission.store');
Route::get('/admissiondelete/{id}',[AdmissionController::class,'addelete'])->name('admission.delete');
Route::get('/admissionedit/{id}',[AdmissionController::class,'editform'])->name('admission.edit');
Route::put('/admissionupdate/{id}',[AdmissionController::class,'adupdate'])->name('admission.update');



                                     #RoomController
Route::get('/roomlist',[RoomController::class,'createlist'])->name('room.list');
Route::get('/roomform',[RoomController::class,'roomform'])->name('room.form');
Route::post('/roomstore',[RoomController::class,'roomsubmit'])->name('room.store');
Route::get('/roomdelete/{id}',[RoomController::class,'roomdelete'])->name('room.delete');
Route::get('/roomedit/{id}',[RoomController::class,'roomedit'])->name('room.edit');
Route::put('/roomupdate/{id}',[RoomController::class,'roomupdate'])->name('room.update');

                                    #WardController
Route::get('/ward-list',[WardController::class,'wardlist'])->name('ward.list');
Route::get('/ward-form',[WardController::class,'wardform'])->name('ward.form');
Route::post('/ward-store',[WardController::class,'wardstore'])->name('ward.store');
Route::get('/ward/delete/{id}',[WardController::class,'ward_delete'])->name('ward.delete');
Route::get('/ward-edit/{id}',[WardController::class,'wardedit'])->name('ward.edit');
Route::put('/ward-update/{id}',[WardController::class,'wardupdate'])->name('ward.update');

                                    #BedController
Route::get('/bedlist',[BedController::class,'bedlist'])->name('bed.list');                                
Route::get('/bedform',[BedController::class,'bedform'])->name('bed.form');                                
Route::post('/bedstore',[BedController::class,'bedstore'])->name('bed.store');                                
Route::get('/beddelete/{id}',[BedController::class,'beddelete'])->name('bed.delete');                                
Route::get('/bededti/{id}',[BedController::class,'bededit'])->name('bed.edit');                                
Route::put('/bedupdate/{id}',[BedController::class,'bedupdate'])->name('bed.update');                                
                               

                                    #DiseasesController
Route::get('/diseases_list',[DiseasesController::class,'diseases_list'])->name('diseases.list');
Route::get('/diseases_form',[DiseasesController::class,'diseases_form'])->name('diseases.form');
Route::post('/diseases_store',[DiseasesController::class,'diseases_store'])->name('diseases.store');
Route::get('/diseases_delete/{id}',[DiseasesController::class,'diseases_delete'])->name('diseases.delete');

Route::get('/diseases_edti/{id}',[DiseasesController::class,'diseases_edit'])->name('diseases.edit');

Route::put('/diseases_update/{id}',[DiseasesController::class,'diseases_update'])->name('diseases.update');

 

}); 
                                    #End Backend Route

 
