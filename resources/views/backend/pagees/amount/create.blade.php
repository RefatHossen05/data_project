@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('amount')}}" class="btn btn-outline-primary my-2">Show Amount</a>
</div>

<h1 class="text-center bg-success text-white p-2">Amount Form</h1>
<div class="container mx-auto">
    <form action="">
        <div class="form-group my-2">
         <label for="sl" class="mb-1">SL No</label>
         <input type="number" class="form-control" id="sl">
        </div>
        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Date:</label>
         <input type="number" class="form-control" id="tname">
        </div>

        <div class="form-group my-2">
         <label for="price" class="mb-1">code</label>
         <input type="number" class="form-control" id="price">
        </div>

        <div class="form-group my-2">
         <label for="sl" class="mb-1">Type of Test</label>
         <input type="number" class="form-control" id="sl">
        </div>

        <div class="form-group my-2">
         <label for="sl" class="mb-1">Bad & Cavin</label>
         <input type="number" class="form-control" id="sl">
        </div>

        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Bill:</label>
         <input type="number" class="form-control" id="tname">
        </div>

        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Discoutn:</label>
         <input type="number" class="form-control" id="tname">
        </div>
        <div class="form-group my-2">
         <label for="tname"  class="mb-1">Recived:</label>
         <input type="number" class="form-control" id="tname">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection