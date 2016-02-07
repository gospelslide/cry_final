@extends('volunteer.master')
@section('cssblock')
 <style>
 #forms{text-align:center;padding-top: 5%;}
 </style>
 @stop
 @section('content')
 <div class="container">
 <div id="forms">
  <div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
     <div class="login-panel panel panel-success">
      <div class="panel-heading">
       <h3 class="panel-title">Volunteer Login</h3>
      </div>
      <div class="panel-body">
       <form method="POST" role="form" action="volunteer/validate" accept-charset="UTF-8"><input name="_token" type="hidden">
        {!! csrf_field() !!}
        <fieldset>
        <div class="form-group">
         <label for="email">Email:</label>
         <input class="form-control" required="required" name="email" type="text" id="email" placeholder="Your Id">
        </div>
        <div class="form-group">
         <label for="password">Password:</label>
         <input name="password" class="form-control" type="password" id="password" placeholder="Your Password">
        </div>
        <div class="form-group">
         <input type="checkbox" name="remember"> Remember Me
        </div>
        <div class='form-group'>
         <input class="btn btn-primary form-control btn-block" type="submit" value="Submit">
        </div>
       </fieldset>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
 @stop

@section('javascriptblock')
  <script src="js/vendor/jquery-1.9.1.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Required javascript files for Slider -->
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <!-- /Required javascript files for Slider -->

  <!-- SL Slider -->
  <script type="text/javascript">
   $(function() {
    var Page = (function() {

     var $navArrows = $( '#nav-arrows' ),
     slitslider = $( '#slider' ).slitslider( {
      autoplay : true
     } ),

     init = function() {
      initEvents();
     },
     initEvents = function() {
      $navArrows.children( ':last' ).on( 'click', function() {
       slitslider.next();
       return false;
      });

      $navArrows.children( ':first' ).on( 'click', function() {
       slitslider.previous();
       return false;
      });
     };

     return { init : init };

    })();

    Page.init();
   });
  </script>
  <!-- /SL Slider -->
@stop
