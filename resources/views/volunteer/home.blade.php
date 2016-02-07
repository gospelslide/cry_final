@extends('volunteer.master')
@section('cssblock')
@stop
@section('content')
<div class="container">
 <div class="col-md-4 col-sm-6 col-xs-12">
  <div class="text-center">
   <img src="http://lorempixel.com/200/200/people/9/" class="img-responsive img-circle" alt="User Image" />
  </div>
 </div>
 <div class="col-md-6 col-sm-6 col-xs-12 personal-info" style="margin-top:50px;">
  <nav class="navbar navbar-default">
   <div class="container-fluid">
    <ul class="nav nav-pills" style="padding:4px;">
     <li role="presentation"><a href="task_assigned">View Task</a></li>
     <!-- Pending request page not done -->
     <li role="presentation"><a href="task_pending">Pending Requests</a></li>
     <li role="presentation"><a href="edit" >Edit Profile</a></li>
    </ul>
   </div>
  </nav>
  </div>
 </div>
 <div class="container">
<center><h3>Volunteer History</h3></center>
<br/><hr/>
<div class="container">
 <div class="table-responsive">
  <table class="table table-hover table-bordered">
   <thead>
    <tr>
     <th>Donor Name</th>
     <th>Donor Email</th>
     <th>Item</th>
     <th>Qty</th>
    </tr>
   </thead>
   <tbody>
   
    @foreach($tasks as $task)
    <tr>
     <th>{!! $task->donor_name !!}</th>
     <th>{!! $task->donor_email !!}</th>
     <th>{!! $task->item !!}</th>
     <th>{!! $task->quantity !!}</th>
    </tr>
    @endforeach
   </tbody>
  </table>
 </div>
</div>
@stop
