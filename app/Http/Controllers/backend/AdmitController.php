<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admit;
use App\Models\Patient;
use App\Models\Bed;
use App\Models\Room;
use App\Models\Word;
use Illuminate\Support\Facades\File;
 
class AdmitController extends Controller
{ 

    public function admitedcreate(){
        $admitpeoples = Admit::with('patient','bed','room','ward')->paginate(5);
        return view('backend.pagees.admited.create',compact('admitpeoples',));
    }
    public function admitedform(){
        $patients = Patient::all();
        $beds = Bed::all();
        $rooms = Room::all();
        $wards = Word::all();
        return view('backend.pagees.admited.form',compact('patients','rooms','beds','wards'));
    }

    public function store(Request $request){
        Admit::create([
            'admited_date'=>$request->admited_date,
            'patient_id'=>$request->patient_id,
            'bed_id'=>$request->bed_id,
            'room_id'=>$request->room_id,
            'ward_id'=>$request->ward_id,
            'description'=>$request->description,
        ]);
        return redirect()->route('admit.create');
    }

   

    public function delete($id){
        Admit::find($id)->delete();
        return back();
    }

    public function updateform($id){
        $admited = Admit::find($id);       
        $patients = Patient::all();
        $beds = Bed::all();
        $rooms = Room::all();
        $wards = Word::all();
        return view('backend.pagees.admited.updateform',compact('patients','beds','wards','rooms'));
    }
 
    public function update(Request $request,$id){      
        $admited = Admit::find($id);
       $admited->update([
        'admited_date'=>$request->admited_date,
        'patient_id'=>$request->patient_id,
        'bed_id'=>$request->bed_id,
        'room_id'=>$request->room_id,
        'ward_id'=>$request->ward_id,
        'description'=>$request->description,
        ]);
        return redirect()->back();
    }
  
}
