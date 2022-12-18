<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;
use Illuminate\Support\Facades\File;

class AdmissionController extends Controller
{
    public function admissionlist(){
        $admissions = Admission::all();
        return view('backend.pagees.admission.list',compact('admissions'));
    }

    public function admissionform(){
        return view('backend.pagees.admission.form');
    }

    public function admissionstore(Request $request){
        $filename=null;
        if($request->hasfile('candidate_image')){
            $filename=date('Ymdhmsis').'.'.$request->file('candidate_image')->getClientOriginalExtension();
            $request->file('candidate_image')->storeAs('uploads/Admission',$filename);
        }

        Admission::create([
            'name_of_candidate'=>$request->name_of_candidate,
            'candidate_image'=>$filename,
            'father_or_husband_name'=>$request->father_or_husband_name,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'nationality'=>$request->nationality,
            'permanent_address'=>$request->permanent_address,
            'present_address'=>$request->present_address,
            'email'=>$request->email,
            'contacet_no'=>$request->contacet_no,
            
        ]);
        return to_route('admission.list');
    }

    public function addelete($id){
        Admission::find($id)->delete();
        return back();
    }
 
    public function editform($id){
        $admissions = Admission::find($id);
        return view('backend.pagees.admission.update',compact('admissions'));
    }

    public function adupdate(Request $request,$id){
        $admissionupdate = Admission::find($id);
        $filename = $admissionupdate->candidate_image;

        if($request->hasfile('candidate_image'))
        {
            $removefile = public_path('/uploads/Admission',$filename);
            // File::delete($removefile);
            File::delete('/uploads/Admission/'.$admissionupdate->candidate_image);

            $filename=date('Ymdhmsis').'.'.$request->file('candidate_image')->getClientOriginalExtension();
            $request->file('candidate_image')->storeAs('uploads/Admission',$filename);
        }
        
        


        $admissionupdate->update([
            'name_of_candidate'=>$request->name_of_candidate,
            'candidate_image'=>$filename,
            'father_or_husband_name'=>$request->father_or_husband_name,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'nationality'=>$request->nationality,
            'permanent_address'=>$request->permanent_address,
            'present_address'=>$request->present_address,
            'email'=>$request->email,
            'contacet_no'=>$request->contacet_no,
            
        ]);
        return back();

    }





}

 