@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('admitedcreate')}}" class="btn btn-outline-primary my-2">Show Admited patient</a>
</div>

<h1 class="text-center bg-success text-white p-2">Amount Form</h1>
<div class="container mx-auto">


    <form action="{{ route('admit.store')}}" method="POST">
    @csrf
   

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