@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ Route('add.testname')}}" class="btn btn-outline-primary my-2">Add Test</a>
</div>

<table class="table table-bordered table-success text-center table-striped">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Test Name</th>
            <th>Price</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        

    </tbody>


</table>

@endsection