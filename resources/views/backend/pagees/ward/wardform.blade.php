@extends('backend.master')


@section('content')
 
<div class="mx-auto"> 
<a href="{{ url('ward-list')}}" class="btn btn-outline-primary my-2">Back</a>
</div>

<div class="row justify-content-center">
<div class="col-lg-6 ">

<h3 class="text-center bg-success text-white py-2">Ward information add</h3>
<div class="container mx-auto">
    <form action="{{route('ward.store')}}" method="POST"  enctype="multipart/form-data">
     @csrf

        <div class="form-group my-2">
         <label for="ward_no"  class="mb-1">ward No</label>
         <input type="text" class="form-control" name="ward_no"  id="ward_no" required>
        </div>
        <!-- @error('ward_no')
        <strong>{{$message}}</strong>
        @enderror -->

        <div class="form-group my-2">
         <label for="ward_name"  class="mb-1">ward Name</label>
         <input type="text" class="form-control" name="ward_name"  id="ward_name" required>
        </div>

        <div class="form-group my-2">
         <label for="image"  class="mb-1">ward Image</label>
         <input type="file" class="form-control" name="image"  id="image" required>
        </div>

        <div class="form-group my-2">
         <label for="ward_type"  class="mb-1">ward type</label>
         <input type="text" class="form-control" name="ward_type"  id="ward_type" required>
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>

</div>

@endsection