<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function prescribe(){
        return view('backend.pagees.prescribe');
    }

    public function admit(){
        return view('backend.pagees.admit');
    }



    public function  totalamount(){
        return view('backend.pagees.amount.amount');
    }
    public function amountcreate(){
        return view('backend.pagees.amount.create');
    }

}
