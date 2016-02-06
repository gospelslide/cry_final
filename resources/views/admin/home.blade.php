@extends('admin.master')
@section('cssblock')
@stop
@section('content')
<div class="container">
 <center><h3>Donation History</h3></center>
 <div class="container">
  <div class="table-responsive">
   <table class="table  table-bordered table-hover">
    <thead>
     <tr>
     <th>Donor Name</th>
    <th>Donor Email</th>
     <th>Donation</th>
     <th>Quantity</th>
     </tr>
    </thead>
    <tbody>
    @foreach($donations as $donation)
     <tr>
      <th>{{ $donation->donor_name }}</th>
      <th>{{ $donation->donor_email }}</th>
      <th>{{ $donation->item }}</th>
      <th>{{ $donation->quantity }}</th>
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
