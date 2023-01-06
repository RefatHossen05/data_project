@extends('backend.master')


@section('content')
 
<div class="mx-auto">
<a href="{{ url('wardlist')}}" class="btn btn-outline-primary my-2">Back</a>
</div>

<div class="row justify-content-center">
<div class="col-lg-6 ">

<h3 class="text-center bg-success text-white py-2">ward information</h3>
<div class="container mx-auto">
    <form action="{{route('ward.update',$wards->id)}}" method="POST"  enctype="multipart/form-data">
     @csrf
     @method('PUT')

        <div class="form-group my-2">
         <label for="ward_no"  class="mb-1">ward No</label>
         <input type="text" class="form-control" name="ward_no"  id="ward_no" value="{{$wards->ward_no}}">
        </div>

        <div class="form-group my-2">
         <label for="ward_name"  class="mb-1">ward Name</label>
         <input type="text" class="form-control" name="ward_name"  id="ward_name" value="{{$wards->ward_name}}">
        </div>

        <div class="form-group my-2">
         <label for="image"  class="mb-1">ward Image</label>
         <input type="file" class="form-control" name="image"  id="image">
         <img src="{{url('/uploads/ward/'.$wards->image)}}" height="70px" width="70px" alt="">
        </div>

        <div class="form-group my-2">
         <label for="ward_type"  class="mb-1">ward type</label>
         <input type="text" class="form-control" name="ward_type"  id="ward_type" value="{{$wards->ward_type}}">
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>

</div>

@endsection