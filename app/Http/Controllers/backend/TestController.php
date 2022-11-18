<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testname(){
        return view('backend.pagees.labtest.testname.testname');
    }
    public function tprice(){
        return view('backend.pagees.labtest.testname.create');
    }



    public function add(){
        return view('backend.pagees.labtest.metarialadd.add');
    }
    public function list(){
        return view('backend.pagees.labtest.metarialadd.create');
    }


    public function stokemetarial(){
        return view('backend.pagees.labtest.stokemetarial.stokemetarial');
    }
    public function smet(){
        return view('backend.pagees.labtest.stokemetarial.create');
    }

}
