@extends('backend.master')


@section('content')
 
<div class="mx-auto">
<a href="{{ url('bedlist')}}" class="btn btn-outline-primary my-2">Back</a>
</div>

<div class="row justify-content-center">
<div class="col-lg-6 ">

<h3 class="text-center bg-success text-white py-2">Bed information add</h3>
<div class="container mx-auto">
    <form action="{{route('bed.store')}}" method="POST"  enctype="multipart/form-data">
     @csrf

        <div class="form-group my-2">
         <label for="bed_no"  class="mb-1">Bed No</label>
         <input type="text" class="form-control" name="bed_no"  id="bed_no">
        </div>

        <div class="form-group my-2">
         <label for="bed_name"  class="mb-1">Bed Name</label>
         <input type="text" class="form-control" name="bed_name"  id="bed_name">
        </div>

        <div class="form-group my-2">
         <label for="bed_image"  class="mb-1">Bed Image</label>
         <input type="file" class="form-control" name="image"  id="bed_image">
        </div>

        <div class="form-group my-2">
         <label for="bed_type"  class="mb-1">Bed type</label>
         <input type="text" class="form-control" name="bed_type"  id="bed_type">
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>

</div>

@endsection