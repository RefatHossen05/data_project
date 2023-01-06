<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.index');
    }


    public function about_page(){
        return view('frontend.pages.aboutcontent');
    }
 
    public function department(){
        return view('frontend.pages.another_page.department');
    }

    public function doctor(){
        return view('frontend.pages.another_page.doctor');
    }

    public function test_type(){
        return view('frontend.pages.another_page.test');
    }


    public function contact(){
        return view('frontend.pages.another_page.contact');
    }



}
 