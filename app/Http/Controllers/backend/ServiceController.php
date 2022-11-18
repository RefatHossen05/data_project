<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\validator;
#use session;


class ServiceController extends Controller
{
    
    public function cerateForm(){
        return view('backend.pagees.servicees.create');
    }

    public function store(Request $request){
        
        $validator=validator::make($request->all(),[
            'doctorname' => 'required|max:255',
            'dpt' => 'required|max:255',
            'degree' => 'required|max:255',
            'time' => 'required|max:255',
            'address' => 'required|max:255',
            'mobile' => 'required|max:255',
        ]);
        if($validator->fails()){
            return redirect(url('/create-service'))->withErrors($validator)->withinput();
        }




        #insert code
       $doctor = new Doctor();
       $doctor->doctorname = $request->doctorname;
       $doctor->dpt = $request->dpt;
       $doctor->degree =$request->degree;
       $doctor->time = $request->time;
       $doctor->address = $request->address;
       $doctor->mobile = $request->mobile;
       $doctor->save();

      session()->flash('msg','Doctor Information Added Successfully');
       return redirect()->back();


    }


    public function show(Doctor $doctor){
        $doctors = Doctor::all();
        return view('backend.pagees.servicees.doctorlist',compact('doctors'));
    }

}
