<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RogiController extends Controller
{
    public function information(){
        return view('backend.pagees.ptninfo.info');
    }

    public function list(){
        return view('backend.pagees.ptninfo.create');
    }

    public function submit_data(Request $request){
        return $request->all();
    }


}
