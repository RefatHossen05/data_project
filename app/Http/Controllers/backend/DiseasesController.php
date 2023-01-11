<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diseases;
use App\Models\Doctor;


class DiseasesController extends Controller
{
    public function diseases_list(){
        $diseases = Diseases::with('doctor')->paginate(5);
        return view('backend.pagees.diseases.diseaseslist',compact('diseases'));
    }
     
    public function diseases_form(){
        $doctors = Doctor::all();
        return view('backend.pagees.diseases.diseasesform',compact('doctors'));
    }
    
    public function diseases_store(Request $request){
 
        Diseases::create([           
            'diseases_type'=>$request->diseases_type,
            'doctor_id'=>$request->doctor_id,
        ]);
        return back();
    
    }
    
            public function diseases_delete($id){
                $diseases = Diseases::find($id);
            
                $diseases->delete();          
                return back();
            }
    
            public function diseases_edit($id){
                $doctors = Doctor::all();
                $diseases = Diseases::find($id);
                return view('backend.pagees.diseases.diseasesedit',compact('diseases','doctors'));
            }
    
            public function diseases_update(Request $request,$id){
               
                $diseases = Diseases::find($id);
    
                $diseases->update([
                   
                    'diseases_type'=>$request->diseases_type,
                ]);
               return to_route('diseases.list');
        }
}
