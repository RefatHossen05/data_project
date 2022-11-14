<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testname(){
        return view('backend.pagees.labtest.testname');
    }

    public function add(){
        return view('backend.pagees.labtest.add');
    }

    public function stokemetarial(){
        return view('backend.pagees.labtest.stokemetarial');
    }

}
