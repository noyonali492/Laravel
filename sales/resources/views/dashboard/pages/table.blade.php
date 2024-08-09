@extends('dashboard.layout.master')
@section('maincontent')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
    <h5>Grade Table</h5>
    {{ Session::get('msg')}}
    <br>
    <hr>
    <a href="{{url('/addgrade')}}" class="label label-info">Add Grade</a> </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL</th>
          <th>Id</th>
          <th>Name</th>
          <th>basic</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @php
         $i=0; 
      @endphp
       @if ($alldatas == true )
     @foreach ($alldatas as $alldata)
    
     <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $alldata->id}}</td>
      <td>{{ $alldata->name}}</td>
      <td>{{ $alldata->basic}}</td>
      <td><a href="{{url('/editgrade/'.$alldata->id)}}" >Edit</a> !
        <a href="{{url('/deletegrade/'.$alldata->id)}}" >Delete</a></td>
    </tr>    
    
     @endforeach
     @else
     There is no record Data Grade Table
     @endif
      </tbody>
    </table>
  </div>
</div>
{{ $alldatas->links() }} 
@endsection