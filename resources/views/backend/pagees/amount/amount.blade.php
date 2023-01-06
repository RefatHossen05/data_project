@extends('backend.master')

@section('content')


<div class="mx-auto">
<a href="{{ route('amount.form')}}" class="btn btn-outline-warning my-2">Add Amount</a>
</div>

<h1 class="text-center p-4 bg-primary text-white border-rounded-y2">Total Amount</h1>

<table class="table">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Date</th>
            <th>Type of Test</th>

            <th>Discription</th>
            <th>Bil</th>
            <th>Discount</th>
            <th>Recived</th>
            <th>Action</th>
        </tr>

            @foreach($amounts as $amount_view)

        <tr>
            <td>{{$amount_view->id}}</td>
            <td>{{$amount_view->date}}</td>
            <td>{{$amount_view->type_of_test}}</td>

            <td>{{$amount_view->discription}}</td>
            <td>{{$amount_view->bill}}</td>
            <td>{{$amount_view->discount}}</td>
            <td>{{$amount_view->recived}}</td>
            <td>
                <a href="{{route('amount.edit',$amount_view->id)}}" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
            @endforeach
    </thead>
    <tbody>

    </tbody>

</table>

<div  class="d-flex justify-content-center">
{{$amounts->links()}}
</div>

@endsection