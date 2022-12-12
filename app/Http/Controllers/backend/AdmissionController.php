<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;

class AdmissionController extends Controller
{
    public function admissionlist(){
        return view('backend.pagees.admission.list');
    }

    public function admissionform(){
        return view('backend.pagees.admission.form');
    }

    public function admissionstore(Request $request){
        $filename=null;
        if($request->hasfile('candidate_image')){
            $filename=date('Ymdhmsis').'.'.$request->file('candidate_image')->getClientOriginalExtention();
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
    }
}

