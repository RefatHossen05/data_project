@extends('backend.master')


@section('content')
 
            
<div class="mx-auto">
<a href="{{ url('diseases_list')}}" class="btn btn-outline-primary my-2">Back</a>
</div>

<div class="row justify-content-center">
<div class="col-lg-6 ">

<h3 class="text-center bg-success text-white py-2">Diseases information add</h3>
<div class="container mx-auto">
    <form action="{{route('diseases.store')}}" method="POST"  enctype="multipart/form-data">
     @csrf

        <div class="form-group my-2">
         <label for="diseases_type"  class="mb-1">Diseases Type</label>
         <input type="text" class="form-control" name="diseases_type"  id="diseases_type">
        </div>

        <div class="form-group my-2">
         <label for="doctor_name"  class="mb-1">Doctor name </label>
         <select name="doctor_id" id="doctor_name" class="form-control form-select">
         @foreach( $doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->dpt}}</option>
        @endforeach
         </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>

</div>

@endsection