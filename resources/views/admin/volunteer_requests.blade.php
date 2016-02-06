@extends('admin.master')
@section('cssblock')
@stop
@section('content')
<div class="container">
<center><h3>Volunteer Request</h3></center>
<div class="table-responsive">
 <table class="table table-hover table-bordered">
  <thead>
   <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Approve</th>
   </tr>
  </thead>
  <tbody>
  @foreach($volunteers as $volunteer)
   <tr>
    <th>{{ $volunteer->name }}</th>
    <th>{{ $volunteer->address }}</th>
    <th>{{ $volunteer->email }}</th>
    <th>
      <form action="volunteer_requests/approve" method="POST">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-success" value="<?php echo $volunteer->id; ?>" name="accept">Accept</button>
      </form>
      <form action="volunteer_requests/reject" method="POST">
      {{ csrf_field() }}
     <button type="submit" class="btn btn-danger" value="<?php echo $volunteer->id; ?>" name="reject">Reject</button>    
     </form>
     </th>
   </tr>
   @endforeach
  </tbody>
 </table>
</div>

</div>
</div>
@stop
@section('javascriptblock')
@stop
