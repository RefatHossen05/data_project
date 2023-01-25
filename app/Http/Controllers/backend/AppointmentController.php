<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\File;

class AppointmentController extends Controller
{
    public function appointmentlist(){
        $lists = Appointment::with('doctors')->paginate(10);
        return view('backend.pagees.appointment.list',compact('lists'));
    }

    public function appointmentform(){
        $doctors =Doctor::all();
        return view('backend.pagees.appointment.form',compact('doctors'));
    }

    public function appointmentstore(Request $request){
        $request->validate([
            'patient_name'=>'required',
            'date'=>'required',
        ]);
   

        Appointment::create([
            'patient_name'=>$request->patient_name,
            'date'=>$request->date,
            'doctor_id'=>$request->doctor_id,

        ]);
        
        return redirect()->back()->with('success','Created Successfully');
    }

    public function appointmentdelete($id){
        Appointment::find($id)->delete();
          return redirect()->route('appointment.list')->with('danger','Deleted Successfully');
    }

    public function appointmentedit($id){
        $lists = Appointment::find($id);
        return view('backend.pagees.appointment.update',compact('lists'));
    }

    public function appointmentupdate(Request $request, $id){

        $request->validate([
            'patient_name'=>'required',
            'date'=>'required',
        ]);



        $lists =  Appointment::find($id);
        $lists->update([
            'patient_name'=>$request->patient_name,
            'date'=>$request->date
        ]);

        return redirect()->route('appointment.list')->with('warning','updated Successfully');
    }
}
