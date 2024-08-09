@extends('dashboard.layout.master')

@section('maincontent') 
 <div class="col-12 gXZrid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Grade</h4>
        <br>
        <a href="{{url('/gradetable')}}" class="label label-info"> View Grade Data Table </a>
        <form class="forms-sample" action="{{'/savegrad'}}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3"> basic Salary</label>
            <input type="number" class="form-control" id="exampleInputEmail3" name="basic" placeholder="Salary">
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection