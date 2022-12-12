<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function appointmentlist(){
        $lists = Appointment::all();
        return view('backend.pagees.appointment.list',compact('lists'));
    }

    public function appointmentform(){
        return view('backend.pagees.appointment.form');
    }

    public function appointmentstore(Request $request){
        $filename=null;
        if($request->hasfile('doctor_image')){
            $filename=date('Ymdhmsis').'.'.$request->file('doctor_image')->getClientOriginalExtension();

            $request->file('doctor_image')->storeAs('/uploads/appointment',$filename);
        }

        Appointment::create([
            'patient_name'=>$request->patient_name,
            'doctor_name'=>$request->doctor_name,
            'doctor_image'=>$filename,
            'date'=>$request->date
        ]);
        return redirect()->route('appointment.list')->with('success','Created Successfully');
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
        $lists =  Appointment::find($id);

        $lists->update([
            'patient_name'=>$request->patient_name,
            'doctor_name'=>$request->doctor_name,
            'date'=>$request->date
        ]);

        return redirect()->route('appointment.list')->with('warning','updated Successfully');
    }
}
