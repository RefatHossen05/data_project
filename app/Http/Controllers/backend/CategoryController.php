<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amount;

class CategoryController extends Controller
{ 
     public function amountcreate(){
        return view('backend.pagees.amount.create');
    }
    public function  totalamount(){
        $amounts = Amount::paginate(5);
        return view('backend.pagees.amount.amount',compact('amounts'));
    }

    public function store(Request $request){      
    //    dd($request->all());

        $request->validate([
            'date'=>'required',
            'type_of_test'=>'required',

            'discription'=>'required',
            'bill'=>'required',
            'discount'=>'required',
            'recived'=>'required',          
        ]);

        Amount::create([
            'date'=>$request->date,
            'type_of_test'=>$request->type_of_test,

            'discription'=>$request->discription,
            'bill'=>$request->bill,
            'discount'=>$request->discount,
            'recived'=>$request->recived,


        ]);
        return to_route('amount')->with('success','Created Successful');
                              
    }

    public function amountdelete($id){
        Amount::find($id)->delete();
        return back();
    }

    public function amountedit($id){
        $amounts = Amount::find($id);
        return view('backend.pagees.amount.editform',compact('amounts'));
    }

    public function amountupdate(Request $request,$id){
        //    dd($request->all());


        $request->validate([
            'date'=>'required',
            'type_of_test'=>'required',
            'discription'=>'required',
            'bill'=>'required',
            'discount'=>'required',
            'recived'=>'required',          
        ]);


        $totalamount = Amount::find($id);

        $totalamount->update([
                'date'=>$request->date,
                'type_of_test'=>$request->type_of_test,

                'discription'=>$request->discription,
                'bill'=>$request->bill,
                'discount'=>$request->discount,
                'recived'=>$request->recived,
    
    
            ]);
            return to_route('amount')->with('success','Created Successful');
                                  
        }
            
           






}
