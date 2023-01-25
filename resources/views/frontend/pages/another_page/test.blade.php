@extends('frontend.master')


@section('content')

<div class="row">
<div style="margin-top:50px" class="col-sm-4 col-md-6 col-lg-12" >

    <div class="bg-secondary py-3 text-white text-center" style="font-size:30px " >
        Test Type and Test Price
    </div>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light text-center">
    <tr class="text-center">
      <th>SL No</th>
      <th>Test Name</th>
      <th>Test Price</th>    
    </tr>
  </thead>
  <tbody>
  @foreach($labtests as $labtest)
    <tr class="text-center">
      <td>{{$labtest->id}}</td>
      <td>{{$labtest->test_name}}</td>
      <td>{{$labtest->price}}</td>   
  @endforeach
  
  </tbody>
</table>
</div>
</div>

@endsection