<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class ApiController extends Controller
{
    public function doctorlists(){
        $doctor = Doctor::all();
        
        return response()->json([
            'success'=>'true',
            'message'=>'DoctorList show',
            'data'=>$doctor
        ]);
    }
}
