@extends('backend.master')


@section('content')
 
<div class="mx-auto">
<a href="{{ url('roomlist')}}" class="btn btn-outline-primary my-2">Back</a>
</div>

<div class="row justify-content-center">
<div class="col-lg-6 ">

<h3 class="text-center bg-success text-white py-2">Room information add</h3>
<div class="container mx-auto">
    <form action="{{route('room.store')}}" method="POST"  enctype="multipart/form-data">
     @csrf

        <div class="form-group my-2">
         <label for="room_no"  class="mb-1">Room No</label>
         <input type="text" class="form-control" name="room_no"  id="room_no">
        </div>

        <div class="form-group my-2">
         <label for="room_name"  class="mb-1">Room Name</label>
         <input type="text" class="form-control" name="room_name"  id="room_name">
        </div>

        <div class="form-group my-2">
         <label for="room_image"  class="mb-1">Room Image</label>
         <input type="file" class="form-control" name="image"  id="room_image">
        </div>

        <div class="form-group my-2">
         <label for="room_type"  class="mb-1">Room type</label>
         <input type="text" class="form-control" name="room_type"  id="room_type">
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>

</div>

@endsection