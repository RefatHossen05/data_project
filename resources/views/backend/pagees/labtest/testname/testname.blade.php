@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ Route('add.testname')}}" class="btn btn-outline-primary my-2">Add Test</a>
</div>
<h1 class="text-center bg-success text-white p-2">Test Name And Price</h1>



@if ($message = session()->get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = session()->get('danger'))
<div class="alert alert-danger alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = session()->get('warning'))
<div class="alert alert-warning alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif





<table class="table table-bordered table-success text-center table-striped">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Test Name</th>
            <th>Price</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($labtests as $testview)
        <tr>
            <td>{{($testview->id)}}</td>
            <td>{{($testview->test_name)}}</td>
            <td>{{($testview->price)}}</td>
            <td>
            <a href="{{route('test.updateform',$testview->id)}}" class="btn btn-warning">
            Update</a>
            <a href="{{ route('testname.delete',$testview->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach  
        

    </tbody>


</table>

@endsection