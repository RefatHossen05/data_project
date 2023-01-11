<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class FrontendController extends Controller
{
    public function home(){
        $doctoros=Doctor::all();
        return view('frontend.index',compact('doctoros'));
    }


    public function about_page(){
        return view('frontend.pages.aboutcontent');
    }
 
    public function department(){
        return view('frontend.pages.another_page.department');
    }

    public function doctor(){
        $doctoros=Doctor::all();
        return view('frontend.pages.another_page.doctor',compact('doctoros'));
    }

    public function test_type(){
        return view('frontend.pages.another_page.test');
    }


    public function contact(){
        return view('frontend.pages.another_page.contact');
    }



}
 