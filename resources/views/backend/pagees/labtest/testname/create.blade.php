@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('testname')}}" class="btn btn-outline-warning my-2">Testname List</a>
</div>

<h1 class="text-center bg-success text-white p-2">Add Test Name And Price</h1>
<div class="container mx-auto">
    <form action="{{route('testname.submit')}}" method="POST">

    @csrf

        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Test Name:</label>
         <input type="text" name="test_name" class="form-control" id="tname">
        </div>

        <div class="form-group my-2">
         <label for="price" class="mb-1">Price</label>
         <input type="number" name="price" class="form-control" id="price">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection