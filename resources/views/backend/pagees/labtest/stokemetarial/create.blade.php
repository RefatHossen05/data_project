@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('stokemetarial')}}" class="btn btn-outline-primary my-2">Stoke List</a>
</div>

<h1 class="text-center bg-success text-white p-2">Add Stokemetarial</h1>
<div class="container mx-auto">
    <form action="">
        <div class="form-group my-2">
         <label for="sl" class="mb-1">SL No</label>
         <input type="number" class="form-control" id="sl">
        </div>
        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Name Of Meterial :</label>
         <input type="text" class="form-control" id="tname">
        </div>

        <div class="form-group my-2">
         <label for="price" class="mb-1">Quantity</label>
         <input type="number" class="form-control" id="price">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection