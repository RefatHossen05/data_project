<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function doctor(){
        return view('backend.pagees.servicees.doctor');
    }
    public function cerateForm(){
        return view('backend.pagees.servicees.create');
    }

    public function updateForm(){
        return view('backend.pagees.servicees.update');
    }

}
