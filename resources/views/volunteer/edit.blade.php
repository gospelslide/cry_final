<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 body {
     padding-top: 60px;
 }
 header {
     position: fixed;
     top: 0;
     transition: top 0.2s ease-in-out;
     width: 100%;
     z-index:1;
 }
 .nav-up {
     top: -60px;
 }
 li {
  display: inline;
 }
 footer {
  background-color: #191919;
  color: #999999;
  position:fixed;
  left:0px;
  bottom:0px;
  width:100%;
 }
 /* IE 6 */
 * html footer {
    position:absolute;
    top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
 }

 #showemail {
  display: none;
 }
 </style>
</head>
<body>
 <header class="nav-down">
  <nav class="navbar navbar-inverse menu-area">
   <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menudrop" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
    </div>
   </div>
   <div class="collapse navbar-collapse" id="menudrop">
    <ul class="nav navbar-nav">
     <li class="active"><a href="home">Home</a></li>
     <li><a href="/contact">Contact</a></li>
    </ul>
   </div>
  </nav>
 </header>

 <div class="container">
  <div class="container">
   <h1 class="page-header">Edit Profile</h1>
   <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
     <div class="text-center">
      <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
      <h6>Upload a different photo...</h6>
      <input type="file" class="text-center center-block well well-sm">
     </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
     <h3>Personal info</h3>
     <form class="form-horizontal" role="form">
      <div class="form-group">
       <label class="col-lg-3 control-label">First name:</label>
       <div class="col-lg-8">
        <input class="form-control" type="text">
       </div>
      </div>
      <div class="form-group">
       <label class="col-lg-3 control-label">Last name:</label>
       <div class="col-lg-8">
        <input class="form-control" type="text">
       </div>
      </div>
      <div class="form-group">
       <label class="col-lg-3 control-label">Email:</label>
       <div class="col-lg-8">
        <input class="form-control" type="text">
       </div>
      </div>
      <div class="form-group">
       <label class="col-lg-3 control-label">Username:</label>
       <div class="col-lg-8">
        <input class="form-control" type="text">
       </div>
      </div>
  <div class="form-group">
   <label class="col-md-3 control-label">Change Password?</label>
   <div class="col-md-8">
    <input type="button" class="btn btn-primary show" value="Change Password" onclick="action();"></input>
   </div>
  </div>
  <div class="form-group">
   <div class="col-lg-8 col-lg-offset-3">
    <form>
     <input class="form-control showemail" type="text" placeholder="Enter Email" id="showemail">
    </form>
   </div>
  </div>
  <div class="form-group">
   <label class="col-md-3 control-label"></label>
   <div class="col-md-8">
    <input class="btn btn-primary" value="Save Changes" type="button">
    <span></span>
    <input class="btn btn-default" value="Cancel" type="reset">
   </div>
  </div>
 </form>
</div>
</div>
</div>
</div>
<br/>
<footer>
 <div class="container">
  <div class="row-fluid">
   <div class="span5 cp">
    &copy; <a href="index.html">Developed By:UnhollyAlliance</a>
   </div>
   <!--/Copyright-->

   <div class="container">
    <ul class="social pull-left" style="display:inline;list-style-type:none;">
     <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
     <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
     <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>
    <a id="gototop" class="gototop pull-right" href="#"><i class="fa fa-chevron-up"></i></a>
   </div>
   <!--/Goto Top-->
  </div>
 </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(".show").click(function () {
 $('.showemail').eq(0).show();
});
</script>
<script>
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
   didScroll = true;
});

setInterval(function() {
   if (didScroll) {
       hasScrolled();
       didScroll = false;
   }
}, 250);

function hasScrolled() {
   var st = $(this).scrollTop();

   // Make sure they scroll more than delta
   if(Math.abs(lastScrollTop - st) <= delta)
       return;

   // If they scrolled down and are past the navbar, add class .nav-up.
   // This is necessary so you never see what is "behind" the navbar.
   if (st > lastScrollTop && st > navbarHeight){
       // Scroll Down
       $('header').removeClass('nav-down').addClass('nav-up');
   } else {
       // Scroll Up
       if(st + $(window).height() < $(document).height()) {
           $('header').removeClass('nav-up').addClass('nav-down');
       }
   }

   lastScrollTop = st;
}
</script>
</body>
</html>
