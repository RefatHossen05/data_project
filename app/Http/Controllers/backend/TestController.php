<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Labtest;
use App\Models\Report;

class TestController extends Controller
{
    public function testname(){
        $labtests = Labtest::all();
        return view('backend.pagees.labtest.testname.testname',compact('labtests'));
    }
    public function testform(){
        return view('backend.pagees.labtest.testname.create');
    }

    public function testnamestore(Request $request){
        $request->validate([
            'test_name'=>'required',
            'price'=>'required'
        ]);
      
        Labtest::create([
            'test_name'=>$request->test_name,
            'price'=>$request->price,
        ]);
        return  redirect()->route('testname')->with('success','Created Successfully');
        //->with('success','Created Successfully');
  
     }

     public function labdrop($id){
        Labtest::find($id)->delete();

        return redirect()->route('testname')->with('danger','oopss!! Deleted Successfully');
    }


     public function testupdateform($id){
         $testnameamdprice = Labtest::find($id);
         return view('backend.pagees.labtest.testname.updateform',compact('testnameamdprice'));
     }

     public function testnaemupdate(Request $request, $id){

        $request->validate([
            'test_name'=>'required',
            'price'=>'required'
        ]);

         $testnameamdprice = Labtest::find($id);
         $testnameamdprice->update([
            'test_name'=>$request->test_name,
            'price'=>$request->price,
         ]);
         return redirect()->route('testname')->with('warning','Updated Successfully');
     }

  













    public function reportlist(){
        $reports = Report::all();
        return view('backend.pagees.labtest.report.reportlist',compact('reports'));
    }
    public function reportform(){
        return view('backend.pagees.labtest.report.reportform');
    }
    public function reportstore(Request $request){

        $request->validate([
            'patient_name'=>'required',
            'test_name'=>'required',
            'result'=>'required'
        ]);


        Report::create([
            'patient_name'=>$request->patient_name,
            'test_name'=>$request->test_name,
            'result'=>$request->result,
        ]);
        return redirect()->route('reprot.list')->with('success','Created Successfully');
    }

    public function tabledelete($id){
        // dd($id);
        Report::find($id)->delete();

        return  redirect()->route('reprot.list')->with('danger','Opps!! Deleted Successfully');
    }




    public function updateform($id){
        $patientreports = Report::find($id);
        return view('backend.pagees.labtest.report.updateform',compact('patientreports'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'patient_name'=>'required',
            'test_name'=>'required',
            'result'=>'required'
        ]);


        $patientreports = Report::find($id);
        $patientreports->update([
            'patient_name'=>$request->patient_name,
            'test_name'=>$request->test_name,
            'result'=>$request->result
        ]);
        return redirect()->route('testname')->with('warning','Updated Successfully');
    }

}
