@extends('welcome')
@section('content')

<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>University_id</label></br>
        <input type="text" name="university_id" id="university_id" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Status</label></br>
<option value="Active">Active</option>
<option value="Blacklisted">Blacklisted</option>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop