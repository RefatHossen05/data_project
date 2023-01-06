@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{url('admitedcreate')}}" class="btn btn-outline-primary my-2">Show Admited</a>
</div>

<h1 class="text-center bg-success text-white p-2">Edit Admited patient</h1>
<div class="container mx-auto">
 

    <form action="{{route('admited.update',$admited->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group my-2">
         <label for="patient_name"  class="mb-1">Patient Name:</label>
         <input type="text" name="patient_name" class="form-control" id="patient_name" value="{{$admited->patient_name}}">
        </div>

        <div class="form-group my-2">
         <label for="patient_image"  class="mb-1">Patient Image:</label>
         <input type="file" name="patient_image" class="form-control" id="patient_image"
        >
        <img src="{{asset('/uploads/admitedpatient/'.$admited->patient_image)}}" alt="image not found" height="70px" width="70px" class="rounded-circle">
        </div>
 

        <div class="form-group my-2">
         <label for="bad_no"  class="mb-1">Bad No:</label>
         <input type="text" name="bad_no" class="form-control" id="bad_no" value="{{$admited->bad_no}}">
        </div>



        <div class="form-group my-2">
         <label for="cabin_no" class="mb-1">Cabin No</label>
         <input type="text" name="cabin_no" class="form-control" id="cabin_no" value="{{$admited->cabin_no}}">
        </div>

        <div class="form-group my-2">
         <label for="description" class="mb-1">Description</label>
         <input type="text" name="description" class="form-control" id="description" value="{{$admited->description}}">
        </div>



       

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Update</button>
        </div>

    </form>

</div>


@endsection