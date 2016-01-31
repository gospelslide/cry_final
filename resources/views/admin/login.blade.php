
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <style>
    #footer{padding-bottom: 50%;}
    #forms{text-align:center;padding-top: 5%;margin-bottom: 12%;}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <!-- /header -->
<div id="forms">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Login form Admin</h1>
<form method="POST" action="admin/validate" accept-charset="UTF-8"><input name="_token" type="hidden">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="email">Email:   </label>
    <input class="form-control" required="required" name="email" type="email" id="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input name="password" type="password" value="" id="password">
  </div>  
  <div class='form-group'>
    <input class="btn btn-primary form-control" type="submit" value="Submit">
  </div>
  @if(!is_null($message))
	</div class='form-group'>
		<p>{{ $message }}</p>
	</div>
  @endif

</form>
</body>
</html>