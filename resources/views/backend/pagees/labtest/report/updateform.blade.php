@extends('backend.master')
@section('content')
<div class="mx-auto">
<a href="{{ url('report')}}" class="btn btn-outline-primary my-2">Report List</a>
</div>

<h1 class="text-center bg-success text-white p-2">Update Report Infromation</h1>
<div class="container mx-auto">

    <form action="{{route('report.update',$patientreports->id)}}" method="POST" >
    @method('PUT')
    @csrf
        <div class="form-group my-2">
         <label for="patient_name"  class="mb-1">Patient Name:</label>
         <input type="text" class="form-control" name="patient_name" placeholder="Plese Enter Patient Name" id="patient_name" value="{{ $patientreports->patient_name }}">
        </div>
        <div class="form-group my-2">
         <label for="test_name"  class="mb-1">Test Name</label>
         <input type="text" class="form-control" name="test_name" placeholder="Test Name" id="test_name" value="{{ $patientreports->test_name}}">
        </div>
        


        <div class="form-group my-2">
         <label for="result" class="mb-1">Result:</label>
         <input type="text" class="form-control" name="result" id="result"  value="{{ $patientreports->result}}">
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
@endsection