
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <style>
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


    <style>

    .register{
        margin: 20px;
        padding: 20px;
    }
    .left{
        float:left;
        margin-left: 15%;
    }
    .right{
        float:right;
        margin-right: 15%;
    }
    .center{
        margin-left: 0%;
        margin-top: 20px;

    }
    #foot{
        margin:top:300%;
    }
    </style>

</head>

<body>

    <!--Header-->
    <header class="navbar navbar-default navbar-nav navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

         <a class="pull-left" href="index.html"><img src="images/logo.jpg" /></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/donate">Donate</a></li>
                        <li class="active"><a href="#">Volunteer</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
<div id="forms">

<h1>Volunteer Login/Register</h1>

<div class="container register">
<div class="left">
    <h2>LOGIN</h2>
{!! Form::open(['url' => 'volunteer/validate']) !!}
    <div class="form-group">
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',null,['class' => 'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password',null,['class' => 'form-control','required'])!!}
    </div>  
<div class='form-group'>
    <div class="center">
        {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close()!!}
</div>
{!! Form::open(['url' => 'volunteer/register']) !!}
<div class="right">
    <h2>REGISTER</h2>   
    <div class="form-group">
        {!! Form::open(['url' => 'details']) !!}
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name',null,['class' => 'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',null,['class' => 'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password',null,['class' => 'form-control','required'])!!}
    </div> 

    <div class="form-group">
        {!! Form::label('confirm_password','Confirm Password:')!!}
        {!! Form::password('confirm_password',null,['class' => 'form-control','required'])!!}
    </div>  

    <div class="form-group">
        {!! Form::label('address','Address:') !!}
        {!! Form::text('address',null,['class' => 'form-control','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pincode','Pincode:') !!}
        {!! Form::text('pincode',null,['class' => 'form-control','required']) !!}
    </div>
<div class='form-group'>
    <div class="center">
        {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
</div>
</div>
{!! Form::close()!!}
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; <a href="index.html">Developed By:UnhollyAlliance</a>
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->


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
</body>
</html>

