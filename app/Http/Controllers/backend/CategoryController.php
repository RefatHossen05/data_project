<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amount;

class CategoryController extends Controller
{
 public function admit(){
        return view('backend.pagees.admit');
    }

    public function amountcreate(){
        return view('backend.pagees.amount.create');
    }
    public function  totalamount(){
        $amounts = Amount::all();
        return view('backend.pagees.amount.amount',compact('amounts'));
    }

    public function store(Request $request){
    //    dd($request->all());
        Amount::create([
            'date'=>$request->date,
            'type_of_test'=>$request->type_of_test,
            'bad_and_cavin'=>$request->bad_and_cabin,
            'discription'=>$request->discription,
            'bill'=>$request->bill,
            'discount'=>$request->discount,
            'recived'=>$request->recived,


        ]);
        return redirect()->back();
                              
    }

  
            
           

#ORM -OBJECT relational mapping




}
