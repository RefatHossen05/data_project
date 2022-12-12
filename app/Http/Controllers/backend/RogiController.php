<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class RogiController extends Controller
{
    public function information(){
        $informations = Patient::all();
        return view('backend.pagees.ptninfo.info',compact('informations'));
    }

    public function list(){
        return view('backend.pagees.ptninfo.create');
    }

    public function submit_data(Request $request){
        $request->validate([
            'patient_name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
        ]);

 
        $filename = null;
        if($request->hasfile('patient_image')){
            $filename = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('patient_image')->getClientOriginalExtension();


       
        $request->file('patient_image')->storeAs('/uploads/patient',$filename);
      }






       Patient::create([
           'patient_name' =>$request->patient_name,
           'gender' =>$request->gender,
           'age' =>$request->age,
           'address' =>$request->address,
           'mobile_no'=>$request->mobile_no,
           'patient_image'=>$filename
       ]);



       return redirect()->route('ptninfo.info')->with('success','Created successfully');

    }

    public function delete($id){
        Patient::find($id)->delete();
        return back();
    }

    public function updateform($id){
        $patientinfo = Patient::find($id);
        return view('backend.pagees.ptninfo.updateform',compact('patientinfo'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'patient_name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
        ]);





        $patientinfoupdate = Patient::find($id);
        $patientinfoupdate->update([
            'patient_name' =>$request->patient_name,
            'gender' =>$request->gender,
            'age' =>$request->age,
            'address' =>$request->address,
            'mobile_no'=>$request->mobile_no,
        ]);
        return redirect()->route('ptninfo.info');
    }

   


}
