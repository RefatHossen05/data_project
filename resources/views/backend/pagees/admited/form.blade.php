@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('admitedcreate')}}" class="btn btn-outline-primary my-2">Show Admited patient</a>
</div>
 
<h1 class="text-center bg-success text-white p-2">Patient Admited Form</h1>
<div class="container mx-auto">


    <form action="{{ route('admit.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group my-2">
         <label for="patient_name"  class="mb-1">Patient Name:</label>
         <input type="text" name="patient_name" class="form-control" id="patient_name">
        </div>

        <div class="form-group my-2">
         <label for="patient_image"  class="mb-1">Patient Image:</label>
         <input type="file" name="patient_image" class="form-control" id="patient_image">
        </div>


        <div class="form-group my-2">
         <label for="bad_no"  class="mb-1">Bad No:</label>
         <input type="text" name="bad_no" class="form-control" id="bad_no">
        </div>



        <div class="form-group my-2">
         <label for="cabin_no" class="mb-1">Cabin No</label>
         <input type="text" name="cabin_no" class="form-control" id="cabin_no">
        </div>

        <div class="form-group my-2">
         <label for="description" class="mb-1">Description</label>
         <input type="text" name="description" class="form-control" id="description">
        </div>



       
 

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection