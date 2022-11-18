<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmitController extends Controller
{
    public function bad(){
        return view('backend.pagees.admit.bad');
    }

    public function cavin(){
        return view('backend.pagees.admit.cavin');
    }
}
