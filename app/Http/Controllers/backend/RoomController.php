<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
public function createlist(){
    $rooms = Room::all();
    return view('backend.pagees.room.roomlist',compact('rooms'));
}

public function roomform(){
    return view('backend.pagees.room.roomform');
}

public function roomsubmit(Request $request){
    $filename = null;
    if($request->hasfile('image')){
        $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('/uploads/room/',$filename);
    }
    Room::create([
        'room_no'=>$request->room_no,
        'room_name'=>$request->room_name,
        'image'=>$filename,
        'room_type'=>$request->room_type,
    ]);
    return back();

}

        public function roomdelete($id){
            $rooms = Room::find($id);
            $filename = $rooms->image;
                if($request->hasfile('image'))
                    $removeFile=public_path().'/uploads/room/'.$filename;
                    File::delete($removeFile);
            $rooms->delete();          
            return back();
        }

        public function roomedit($id){
            $rooms = Room::find($id);
            return view('backend.pagees.room.roomedit',compact('rooms'));
        }

        public function roomupdate(Request $request,$id){
            $rooms = Room::find($id);
            $filename = $rooms->image;
            if($request->hasfile('image')){
                $removeFile=public_path().'/uploads/room/'.$filename;
                File::delete($removeFile);
                $filename=date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        
                $request->file('image')->storeAs('/uploads/room/',$filename);
            }

            $rooms->update([
                'room_no'=>$request->room_no,
                'room_name'=>$request->room_name,
                'image'=>$filename,
                'room_type'=>$request->room_type,
            ]);
           return to_route('room.list');
    }


}
