<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
       return view('backend.pagees.list');
    }

    public function patient(){
        return view('backend.pagees.patient');
    }

    public function prescribe(){
        return view('backend.pagees.prescribe');
    }

    public function admit(){
        return view('backend.pagees.admit');
    }

    public function  amount(){
        return view('backend.pagees.amount');
    }

}
