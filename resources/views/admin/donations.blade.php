@extends('admin.master')
@section('cssblock')
@stop
@section('content')
<div class="container">
<center><h3>Current Donations Assign</h3></center>
<br/><hr/>
<div class="container">
 <div class="table-responsive">
  <table class="table table-hover table-bordered">
   <thead>
    <tr>
    <th>Donor Name</th>
    <th>Donor Address</th>
     <th>Donation</th>
     <th>Quantity</th>
     <th>Assign
    </tr>
   </thead>
   <tbody>
   @foreach($donations as $donation)
    <tr>
     <th>{{ $donation->donor_name }}</th>
     <th>{{ $donation->donor_address }}</th>
     <th>{{ $donation->item }}</th>
     <th>{{ $donation->quantity }}</th>
     <th>
     <form action="donations/assign" action="POST">
      <button type="submit" name="assign" value="<?php echo $donation->id; ?>" class="btn btn-success">Assign</button>
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
