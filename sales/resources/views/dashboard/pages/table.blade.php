@extends('dashboard.layout.master')
@section('maincontent')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
    <h5>Grade Table</h5>
    <span class="label label-info">Featured</span> </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL</th>
          <th>Id</th>
          <th>Name</th>
          <th>basic</th>
          <th>user_by</th>
        </tr>
      </thead>
      <tbody>
      @php
         $i=0; 
      @endphp
     @foreach ($alldata as $alldata)
     <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $alldata->id}}</td>
      <td>{{ $alldata->name}}</td>
      <td>{{ $alldata->basic}}</td>
      <td>{{ $alldata->user_by}}</td>
    </tr>   
     @endforeach
      </tbody>
    </table>
  </div>
</div>   
@endsection