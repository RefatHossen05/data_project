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
        $filename = null;
        if($request->hasfile('doctor_image')){
            $filename = date('Ymdhmsis').'.'.$request->file('doctor_image')->getClientOriginalExtension();

            $request->file('doctor_image')->storeAs('/uploads/doctor/',$filename);
        }


        Doctor::create([
            'doctorname'=>$request->doctorname,
            'dpt'=>$request->dpt,
            'degree'=>$request->degree,
            'time'=>$request->time,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'doctor_image'=>$filename
        ]);


        #insert code
    //    $doctor = new Doctor(); 
      
    //    $doctor->doctorname = $request->doctorname;
    //    $doctor->dpt = $request->dpt;
    //    $doctor->degree =$request->degree;
    //    $doctor->time = $request->time;
    //    $doctor->address = $request->address;
    //    $doctor->mobile = $request->mobile;
    //    $doctor->save();

    //   session()->flash('msg','Doctor Information Added Successfully');
       return redirect()->route('doctor')->with('success','Created Successfully');


    }


    public function show(Doctor $doctor){
        $doctors = Doctor::all();
        return view('backend.pagees.servicees.doctorlist',compact('doctors'));
    }

    public function delete($id){
        Doctor::find($id)->delete();
        return redirect()->route('doctor')->with('danger','Deleted Successfully');
    }


    public function updateform($id){
        $doctorlists = Doctor::find($id);
        return view('backend.pagees.servicees.updateform',compact('doctorlists'));
    }

    public function update(Request $request, $id){
        $doctorlist = Doctor::find($id);
        $doctorlist->update([
            'doctorname'=>$request->doctorname,
            'dpt'=>$request->dpt,
            'degree'=>$request->degree,
            'time'=>$request->time,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
        ]);
        return redirect()->route('doctor')->with('warning','Updated Successfully');
    }

}
