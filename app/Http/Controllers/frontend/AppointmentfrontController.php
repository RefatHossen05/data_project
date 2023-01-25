<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
class AppointmentfrontController extends Controller
{




    public function appointment_submit(Request $request){
        $request->validate([
            'patient_name'=>'required',
            'date'=>'required',
        ]);
   

        Appointment::create([
            'patient_name'=>$request->patient_name,
            'date'=>$request->date,
            'doctor_id'=>$request->doctor_id,

        ]);
        notify()->success('Appointment registration successfull');
       
        return redirect()->back();
    }
}
