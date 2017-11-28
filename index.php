<?php
session_start();
include("function.php");
include("login.php");
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.theme.min.css">
	<script src="smoothscroll.js"></script>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("psd").value;
        var confirmPassword = document.getElementById("cpsd").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<style>
.header-container
{
	width:100%;
	height:100%;
	border-left: none;
	border-right: none;
	position: relative;
}
.video-container
{
	position: absolute;
	top:0%;
	left:0%;
	height:100%;
	width:100%;
	overflow:hidden;
}
video
{
	position: absolute;
	z-index: -1;
	opacity: 0.7;
	width:100%;
}
a
{
	font-family: 'alegreya sans',sans-serif;
	font-size: 18px;
	color:black;
	font-weight: bold;
	padding:10px;
}
.navbar-inverse
{
	background-color: rgba(255,255,255,0.3);
	color:red;
}
.btn-lg
{
	margin-left: 41%;
	margin-right: auto;
	margin-top: 25%;
	border:3px solid orange;
	font-size:30px;
	font-family:Arial Rounded MT Bold;
	background-color: rgba(255,255,240,.3);
}

button{

}


.font
{
	text-align:center;
	font-family:'alegreya sans',sans-serif;
	font-size:30px;
}
.jumbotron
{
	line-height: 2;
	font-family: 'alegreya sans',sans-serif;
	font-size: 17px;
}
.con1
{
	height:3px;
	background-color: orange;
	width:80px;
	margin-top:1px;
	border-radius: 5px;
	border: 1px solid orange;
}
.glyphicon
{
        text-align:center;
        font-size:50px;
        margin-left:160px;
}
.a
{
        text-decoration:none;
        text-align:center;
        color:black;
        font-size: 18px;
        font-family: 'alegreya sans',sans-serif;
        margin-left:40px;
}
.a:hover
{
        text-decoration:none;
}
.co
{
	font-family: 'alegreya sans',sans-serif;
	font-size:20px;
}
.social
{
	height:80px;
	width: 80px;
	border:2px solid orange;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
   border-top:0px;
border-left:0px;
border-right:0px;
border-bottom:2px solid black;
    box-sizing: border-box;

	font-size:20px;
letter-spacing:1px;
opacity:0.4;
    font-family:myfont;
transition:all 2s ease;

}
input[type=text]:focus
{
	opacity:1;
	border-bottom:2px solid purple;
	color:purple;
}
input[type=password]:focus
{
	opacity:1;
	border-bottom:2px solid purple;
	color:purple;
	
} 

h2
{
	 font-family:myfont;
font-size:30px;
}




.container {
    padding: 0px;
}
a
{
	text-decoration:none;
}
span.psw {
    float: right;
    padding-top:0px;
	 font-family:myfont;
}
@font-face
{
	src:url('ubuntu.light.ttf');
	font-family:myfont;
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
       text-align:left;
    }
}

</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse">
	<ul class="nav navbar-nav navbar-right">
	<li class="active"><a href="#" style="color:red;">Home</a></li>
	<li><a href="#about" style="color:red;">About Us</a></li>
	<li><a href="#con" style="color:red;">Contact Us</a></li>
	<li><a href="" style="color:red;" data-toggle="modal" data-target="#exampleModal1">Sign up</a></li>
	</ul>
</div>
</div>
</div>
<div class="header-container">
	<div class="video-container">
	<video preload="true" autoplay="autoplay" loop="loop" volume="0" poster="pic.jpg" >
		<source src="1.mp4" type="video/mp4">
		<source src="1.webm" type="video/webm">
		<source src="1.ogv" type="video/ogg">
	</video>
	<a href="#"><button type="button" class="btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
<!--  <img src="login.jpeg" alt="Save icon" height="50" width="40"/>&nbsp;&nbsp;   -->

Login</button></a>
</div>
</div>




<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Sign Up to start Elections</h4>
      </div>
      <div class="modal-body">
       
<form action=" " method="post">
 
  

  
	
    <input type="text" placeholder="Enter first name" name="fname" required>
	<Br>
<input type="text" placeholder="Enter last name" name="lname" required>
	<Br>
	
    <input type="text" placeholder="Enter E-Mail" name="email" required>
        <Br>
    <input type="password" id="psd" placeholder="Enter Password" name="psw" required>
	<Br>
    <input type="password" id="cpsd" placeholder="Confirm Password"  name="psw" required>
<br>
<br><br>     
    
     
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="sub" onclick="return Validate()">
     
</form>
 <?php
       		 	include("user_ins.php");
       		 ?>

      </div>

      
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login to start Elections</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="uid" class="control-label">Email:</label>
            <input type="email" class="form-control" id="uid" name="email" required>
          </div>
          <div class="form-group">
            <label for="Password" class="control-label">Password:</label>
            <input type="password" class="form-control" id="Password" name="psw" required>
          </div>
	
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="log">
        </form>
      </div>
      
    </div>
  </div>
</div>
<div class="container">
<div class="font wow bounceInUp animated " data-wow-delay="1s" id="about" style="margin-top:50px;"><br><br>About Us</div><hr class="con1 wow zoomIn animated" data-wow-delay="1.3s"><Br>
<div class="jumbotron">
<p> The word 'Vote' means to choose from a list, to elect or to determine. The main goal of voting(in a scenario involving the citizens of a given country) is to come up with leaders of the people's choice.<Br>
online voting system is a online voting technique. In this system the peoples who are eligible can give his/her vote without going to any physical polling station.<br>
<b>How it works:</b><br>

    1. Election administrator creates the "Bin"<br>
    2. Election administrator adds positions and candidates to the Bin's ballot.<br>
    3. Election administrator adds voters to the Bin<br>
    4. Election administrator sends registration email messages to the voters<br>
    5. Election administrator optionally sends reminder email message(s) to the voters<br>
    6. Voters receive registration email messages and click on the included link. This takes them to the voting page. They fill in the ballot and click "done".<br>
    7. Results are tallied and displayed to the election administrator and optionally to the voters as well. <br>

 
</div>
</div>
<div class="container">
<div class="font wow bounceInUp animated " data-wow-delay="1s" id="con"style="margin-top:50px;">Contact Us</div><hr class="con1 wow zoomIn animated" data-wow-delay="1.3s"><Br>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">
<span class="glyphicon glyphicon-envelope"></span>
<br><br>
<a href="http://www.gmail.com" class="a" style="margin-left:50px;">solunkeamruta2014@gmail.com</a><br><Br>
</div>
<div class="col-md-4">

</div>
</div><br>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">
<span class="glyphicon glyphicon-phone-alt"></span>
<br><br>
<a href="#" style="margin-left:100px;" class="a">+91 9096908465</a><br><Br>
</div>
<div class="col-md-4">

</div>
</div><br>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">
<span class="glyphicon glyphicon-globe"></span>
<br><br>
<div class="row">
        <div class="col-md-4">
        <a href="https://www.facebook.com/vishal.mirashe"><img src="f.jpg" class="social img-circled"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.twitter.com/vishal.mirashe"><img src="t.png" class="social"></a>
        </div>
        <div class="col-md-4">
        <a href="https://www.linkedin.com"><img src="in.png" class="social"></a>
        </div>
</div>
</div>
<div class="col-md-4">

</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


