@extends('backend.master')

@section('content')
 
<a href="{{ route('add.form')}}" class="btn btn-outline-primary my-2">Add Metarial</a>
</div>


<div class="text-center">
    <h3 class="text-warning">Add Material</h3>
</div>
<table class="table table-bordered table-dark text-center table-striped">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name Of Meterial</th>
            <th>Quantity</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>Tisu</td>
            <td>1paket</td>
            <td>45</td>
        </tr>
    </tbody>


</table>

@endsection