@extends('volunteer.master')
@section('content')
<div class="container">
<center><h3>Current Tasks</h3></center>
<br/><hr/>
<div class="container">
 <div class="table-responsive">
  <table class="table table-hover table-bordered">
   <thead>
    <tr>
     <th>Donar Name</th>
     <th>Address</th>
     <th>Item</th>
     <th>Qty</th>
     <th></th>
    </tr>
   </thead>
   <tbody>
   @foreach($tasks as $task)
    <tr>
     <th>{!! $task->donor_name !!}</th>
     <th>{!! $task->donor_email !!}</th>
     <th>{!! $task->item !!}</th>
     <th>{!! $task->quantity !!}</th>
     <th><input type="button" name="CompleteTask" value="Completed" class="btn btn-success"></th>
    </tr>
    @endforeach   
   </tbody>
  </table>
 </div>
</div>
</div>
@stop

@section('javascriptblock')
<script type="text/javascript">
   var hidden = false;
   function action() {
       hidden = !hidden;
       if(hidden) {
           document.getElementById('toggler').style.visibility = 'hidden';
           document.getElementById('togglee').style.visibility = 'visible';
       } else {
           document.getElementById('togglee').style.visibility = 'hidden';
       }
   }
</script>
@stop
