<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Support\Facades\File;

class WardController extends Controller
{
    public function wardlist(){
       $data=Word::paginate(5);
        return view('backend.pagees.ward.wardlist',compact('data'));
    }

    public function wardform(){
        return view('backend.pagees.ward.wardform');
    }


    public function wardstore(Request $request){

        $request->validate([
            'ward_no'=>'required',
            'ward_name'=>'required',
            'image'=>'required',
            'ward_type'=>'required',
        ]);

        $filename = null;
        if($request->hasfile('image')){
            $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
    
            $request->file('image')->storeAs('/uploads/ward/',$filename);
        }
        Word::create([

            'ward_no'=>$request->ward_no,
            'ward_name'=>$request->ward_name,
            'image'=>$filename,
            'ward_type'=>$request->ward_type,
        ]);
        return to_route('ward.list')->with('success','Created Successful');
    
    }
    
    
            public function ward_delete($id){
                $wards = Word::find($id);
                $filename = $wards->image;                  
                $removeFile=public_path().'/uploads/ward/'.$filename;
                File::delete($removeFile);                    
                $wards->delete();          
                return back();
            }
    
            public function wardedit($id){
                $wards = word::find($id);
                return view('backend.pagees.ward.wardedit',compact('wards'));
            }
    
            public function wardupdate(Request $request,$id){
                $wards = Word::find($id);
                $filename = $wards->image;
                if($request->hasfile('image')){
                    $removeFile=public_path().'/uploads/ward/'.$filename;
                    File::delete($removeFile);
                    $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
            
                    $request->file('image')->storeAs('/uploads/ward/',$filename);
                }
    
                $wards->update([
                    'ward_no'=>$request->ward_no,
                    'ward_name'=>$request->ward_name,
                    'image'=>$filename,
                    'ward_type'=>$request->ward_type,
                ]);
               return to_route('ward.list');
        }
    
}
