@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher/' .$teacher->id ) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teacher->id}}" id="id" />
        <label>Name</label></br>

      <label for="status">Update Status</label>

<select name="status" id="status">
<option value="Active">Active</option>
<option value="Blacklisted">Blacklisted</option>

</select>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop