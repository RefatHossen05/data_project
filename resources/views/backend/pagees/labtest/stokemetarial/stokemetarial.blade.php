@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ route('add.metarifalform')}}" class="btn btn-outline-primary my-2">Add stokemetarial</a>
</div>

<table class="table table-bordered table-success text-center table-striped">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name Of Meterial</th>
            <th>Quantity</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>Blude testing glass</td>
            <td>12ps</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Hand Glaps</td>
            <td>1paket</td>
        </tr>
        

    </tbody> 


</table>

@endsection