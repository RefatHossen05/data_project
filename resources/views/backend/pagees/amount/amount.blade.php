@extends('backend.master')

@section('content')


<div class="mx-auto">
<a href="{{ route('amount.form')}}" class="btn btn-outline-warning my-2">Add Amount</a>
</div>

<h1 class="text-center p-4 bg-primary text-white border-rounded-y2">Popular Diagonstic Center</h1>

<table class="table">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Date</th>
            <th>Type of Test</th>
            <th>Bad & Cavin</th>
            <th>Discription</th>
            <th>Bil</th>
            <th>Discount</th>
            <th>Recived</th>
        </tr>

            @foreach($amounts as $amount_view)

        <tr>
            <td>{{$amount_view->id}}</td>
            <td>{{$amount_view->date}}</td>
            <td>{{$amount_view->type_of_test}}</td>
            <td>{{$amount_view->bad_and_cavin}}</td>
            <td>{{$amount_view->discription}}</td>
            <td>{{$amount_view->bill}}</td>
            <td>{{$amount_view->discount}}</td>
            <td>{{$amount_view->recived}}</td>
        </tr>
            @endforeach
    </thead>
    <tbody>

    </tbody>

</table>

@endsection