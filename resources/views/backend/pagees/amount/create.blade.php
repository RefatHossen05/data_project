@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('amount')}}" class="btn btn-outline-primary my-2">Show Amount</a>
</div>

<h1 class="text-center bg-success text-white p-2">Amount Form</h1>
<div class="container mx-auto">


    <form action="{{ route('amount.submit') }}" method="POST">
    @csrf

        <div class="form-group my-2">
         <label for="date"  class="mb-1">Date:</label>
         <input type="text" name="date" class="form-control" id="date">
        </div>



        <div class="form-group my-2">
         <label for="test" class="mb-1">Type of Test</label>
         <input type="text" name="type_of_test" class="form-control" id="test">
        </div>

        <div class="form-group my-2">
         <label for="b&c" class="mb-1">Bad & Cabin</label>
         <input type="text" name="bad_and_cabin" class="form-control" id="b&c">
        </div>

        <div class="form-group my-2">
         <label for="discription" class="mb-1">Discription</label>
         <input type="text" name="discription" class="form-control" id="discription">
        </div>


        <div class="form-group my-2">
         <label for="bill"  class="mb-1">Bill:</label>
         <input type="number" name="bill" class="form-control" id="bill">
        </div>

        <div class="form-group my-2">
         <label for="discoutn"  class="mb-1">Discount:</label>
         <input type="number" name="discount" class="discount" class="form-control" id="discount">
        </div>
        <div class="form-group my-2">
         <label for="recived"  class="mb-1">Recived:</label>
         <input type="number" name="recived" class="form-control" id="recived">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection