<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function bedlist(){
        $beds = Bed::paginate(2);
        return view('backend.pagees.bed.bedlist',compact('beds'));
    } 
    
    public function bedform(){
        return view('backend.pagees.bed.bedform');
    }
    
    public function bedstore(Request $request){
        $filename = null;
        if($request->hasfile('image')){
            $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
    
            $request->file('image')->storeAs('/uploads/bed/',$filename);
        }
        Bed::create([
            'bed_no'=>$request->bed_no,
            'bed_name'=>$request->bed_name,
            'image'=>$filename,
            'bed_type'=>$request->bed_type,
        ]);
        return back()->with('success','Created Successfull');
    
    }
    
            public function beddelete($id){
                $beds = Bed::find($id);
                $filename = $beds->image;
                    if($request->hasfile('image'))
                        $removeFile=public_path().'/uploads/bed/'.$filename;
                        File::delete($removeFile);
                $beds->delete();          
                return back()->with('danger','Deleted Successfull');
            }
    
            public function bededit($id){
                $beds = Bed::find($id);
                return view('backend.pagees.bed.bededit',compact('beds'));
            }
    
            public function bedupdate(Request $request,$id){
                $beds = Bed::find($id);
                $filename = $beds->image;
                if($request->hasfile('image')){
                    $removeFile=public_path().'/uploads/bed/'.$filename;
                    File::delete($removeFile);
                    $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
            
                    $request->file('image')->storeAs('/uploads/bed/',$filename);
                }
    
                $beds->update([
                    'bed_no'=>$request->bed_no,
                    'bed_name'=>$request->bed_name,
                    'image'=>$filename,
                    'bed_type'=>$request->bed_type,
                ]);
               return to_route('bed.list')->with('warning','Updated Successfull');
        }
     
}
