<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admit;

class AdmitController extends Controller
{ 

    public function admitedcreate(){
        $admitpeoples = Admit::all();
        return view('backend.pagees.admited.create',compact('admitpeoples'));
    }
    public function admitedform(){
        return view('backend.pagees.admited.form');
    }

    public function store(Request $request){
        
        $filename = null;
        if($request->hasfile('patient_image')){
            $filename=date('Ymdhmsis').'.'.$request->file('patient_image')->getClientOriginalExtension();

            $request->file('patient_image')->storeAs('uploads/admitedpatient',$filename);
        }

        Admit::create([
            'patient_name'=>$request->patient_name,
            'bad_no'=>$request->bad_no,
            'cabin_no'=>$request->cabin_no,
            'description'=>$request->description,
            'patient_image'=>$filename,
        ]);
        return redirect()->route('admit.create')->with('success','Created Successfully');
    }

   

    public function delete($id){
        Admit::find($id)->delete();
        return back();
    }

    public function updateform($id){
        $admited = Admit::find($id);

        return view('backend.pagees.admited.updateform',compact('admited'));
    }
 
    public function update(Request $request,$id){
        $admited = Admit::find($id);
        $admited->update([
            'bad_no'=>$request->bad_no,
            'cabin_no'=>$request->cabin_no,
            'description'=>$request->description,
        ]);
        return redirect()->back();
    }
  
}
