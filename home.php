<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['eid']))
{
	header("location:index.php");
}
else
{

?>
<html>
<head>
	<title>E-VOTE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/select_css.css">
	

	<script type="text/javascript">
	var counter = 0;
	$(function(){
	 $('p#add_field').click(function(){
	 counter += 1;
	 $('#container').append(
	 '<strong>candidate No. ' + counter + '</strong><br />'

	 + '<input id="field_' + counter + '" name="mytext[]' + '" type="text" /><br />' );
	 });
	});
</script>
<script>
$(function(){
$('.submit').click(function(){
var te=$('.voter').val();
$('.voter').val("");
var prestate=$('.scrollabletextbox').html();
$('.scrollabletextbox').html(prestate+te+'\n');
});
});
</script>


		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />
	
	<style type="text/css">
	a
	{
		color:black;
		
		font-weight: bold;
	}
	@font-face{
        src:url('Ubuntu-L.ttf');
        font-family:myFont;
       
        }
	.selvot
	{
		background:red;
	}
        body{
        font-family:myFont;
        }	
    .scrollabletextbox {
    height:250px;
    width:400px;
 
    font-size: 22px;
    overflow:scroll;
    border: 2px solid #CCC;
    }
   button{
   color:black;

   font-weight: bold;
   border: 2px solid #CCC;
   }
   a
{
	font-family:Ubuntu Light;
	font-size:17px;

}
   .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
	
			
			.wrapper { width:900px; margin:0px auto; padding:20px;background-color:#eee; }
			input[type="text"] { width:250px; border: 2px solid #CCC; line-height:20px;height:40px; border-radius:10px; padding:5px; }

/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
</style>
</head>
<body >
	<?php
require 'connect.inc.php';
	require 'core.inc.php';
	if (isset($_POST['submit_val'])) {
$posti=$_POST['posti'];
$mytext=$_POST['mytext'];
$eid=$_SESSION["eid"];
$tim = time();
for($i=0;$i<count($mytext);$i++)
 {
  mysqli_query($con,"insert into positionc (posti,mytext,eid,time) values('$posti','$mytext[$i]','$eid',
  '$tim')");
 }
}
?>


<?php
include("connect.inc.php");
if(isset($_POST['sub1']))
{
$data=preg_split('\s*[\r\n]+\s*#',trim($_POST['voter']));
 $values1=array();
  
  foreach($data as $val)
{
  
 $values1[] = "('".mysqli_real_escape_string($con, $val)."')";
  
}
$sql = "INSERT INTO table (voter) VALUE".implode(",\n", $values1);
mysqli_query($con,$sql);
}
?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-stats"></span> E-Ballot</a>
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	
       
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php if(!loggedin())
		{?>
        <li><a href="" data-toggle="modal" data-target="#exampleModal1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		 <li><a href="signup.php"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
		<?php
		}
		else
		{?>
		 <li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>	
		<?php
		}?>
              <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact us</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="row">
	
	<div class="col-md-12">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ballot" aria-controls="home" role="tab" data-toggle="tab">Ballot</a></li>
    <li role="presentation"><a href="#voters" aria-controls="profile" role="tab" data-toggle="tab">Voters</a></li>

  </ul>
<!------------------->
<script>
$('#myTab a').click(function(e) {
  e.preventDefault();
  $(this).tab('show');
});

// store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
  var id = $(e.target).attr("href").substr(1);
  window.location.hash = id;
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#myTab a[href="' + hash + '"]').tab('show');
</script>
<!---------------------->


  <div class="tab-content">
   


    <div role="tabpanel" class="tab-pane" id="ballot" style="margin-left:10px;"></br>
        <div class="ballot-title"><h1>Election Positions/ Candidates</h1></div>
	<div class="jumbotron" style="background-color:#ffe6f9;border-left:solid 4px #ff1ac9">
		<ul>
		<li>
			<font size="4">If you are having an election for a club president, you should create a Position Heading like "Club President"
                    or "Vote for a club President".  Underneath that heading, you will be allowed to enter candidate's names.</font>
		</li>
		</ul>
	</div>
	

	<div class="container">
	<div class="row">
	<div class="col-md-6" style="border-radius:5px;background-color:#f2f2f2;padding:20px;">
	<center>	
<form method="post" action="">
<h3><b>Enter Postition</b></h3>
<div>
	<input type="text" name="posti" placeholder="e.g. President" class="form-control">
</div>

	<h3><b>Add More Candidates</b></h3>
 
 <div id="container">
 <p id="add_field"><a href="#" style="text-decoration:none;"><span><b>Click To Add Candidates</b></span></a></p>
    </div>
	 <input type="submit" name="submit_val" class="btn btn-success" value="Submit" />
 </form></center>
</div>
<div class="col-md-6">
     
       
   <?php
		$host = "localhost";
		$user = "root";
		$pass ="";
		$db = "ebal";
		$con = mysqli_connect($host,$user,$pass,$db);
		$eid=$_SESSION['eid'];
      	$query="select vstatus,post from users where eid='$eid'" ;
      	$run_user=mysqli_query($con,$query);
		$row=mysqli_fetch_array($run_user);
		$vstatus=$row['0'];
		$post=$row['1'];
		$query1="select mytext from positionc where eid='$eid' AND posti='$post'" ;
      	$run_user1=mysqli_query($con,$query1);
		if($vstatus==1)
		
		{
		
					echo nl2br("<font size=5 color=#993366><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELECTION POSITION:</b></font><b><font size=4> \n <center>$post</center> </font></b> \n");
					echo nl2br("<font size=5 color=#993366><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANDIDATES:</b></font> .\n");
					 while($row1=mysqli_fetch_array($run_user1)){
     					$candidates=$row1[0];
					   echo nl2br("<b><font size=4> <center>$candidates</center>  </font></b>.\n");
					
					  }
					
			
		}		
      ?>
    
    
</div>
</div></div>
	
	</div>

<div role="tabpanel" class="tab-pane" id="voters" style="margin-left:10px;">
<div class="container">
    <h2>Import CSV File Data into Database</h2>
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" accept=".csv"/>
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <textarea class="table table-bordered" rows="13">
                    <?php
                    //get rows query
                    $query = $con->query("SELECT * FROM members ORDER BY id DESC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){
                        ?>
                        
                    <?php echo $row['email']; ?>
                      <?php } }else{ ?>
                    No member(s) found.....
                    <?php } ?>
                </textarea>
        </div>
        <form action="#1" method="POST">
		<center><h1>Send mail to voters</h1>
		
		
		<input type="submit" class="btn btn-primary btn-lg" value="SEND" name="submit2"/>
		</center>
		</form>


    </div>
</div>
<center>
<form method="POST" >
<label for="position" ><font size="5">Enter Position for which you want to start election:</font></label>
<?php 
	$host = "localhost";
	$user = "root";
	$pass ="";
	$db = "ebal";
	$con = mysqli_connect($host,$user,$pass,$db);
	$eid=$_SESSION['eid'];
        $query="select distinct posti from positionc where eid='$eid'";
        $run=mysqli_query($con,$query);
       // $row = mysqli_fetch_array($run);
?>
<center>
<div class="styled-select slate" >

<select name="post" class="selectpicker" data-style="btn-primary">
       <?php while($row=mysqli_fetch_array($run)){?> 
<option name="opt"> <?php echo $row[0]; ?></option>
<?php }?>
</select>

</div></center>
</br></br>
<center>
<input type="submit" class="btn btn-success btn-lg" value="START ELECTION" name="start1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn btn-danger btn-lg" value="STOP ELECTION" name="start2"/>
</center>
</form>
</center>
<form action="result4.php">
<input type="submit" class="btn btn-danger btn-lg" value="GENERATE RESULTS" name="generate"/>
</form>

</div>


 
  </div>
	</div>
</div>

      	
	</div>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
include "connect.inc.php";
if(isset($_POST['submit2']))
{
$sql = mysqli_query($con,"select * from members");
$recipients = array();
$msg = array();

while($row = mysqli_fetch_array($sql)) {
    $recipients[] = $row[2];

}
$email_user=$_SESSION["eid"];
$to = implode(', ', $recipients);
$subject = "E-mail subject";

$message = 'http://ebal.wcesait.org/vote1.php';

$headers = 'from:'.$email_user. "\r\n" ;
$headers .= 'Reply-To: sanjeevanithape7@gmail.com' . "\r\n";

mail($to, $subject, $message, $headers);
  
                
}	
			
?>
<?php
if(isset($_POST['start1']))
{
$post=$_POST['post'];
$eid=$_SESSION['eid'];
$query="update users set post='$post' where eid='$eid'";
mysqli_query($con,$query);

$query1="update users set vstatus=1 where eid='$eid'";
mysqli_query($con,$query1);

}
if(isset($_POST['start2']))
{
$post=$_POST['post'];
$eid=$_SESSION['eid'];
$query="update users set post='XX' where eid='$eid'";
mysqli_query($con,$query);

$query1="update users set vstatus=0 where eid='$eid'";
mysqli_query($con,$query1);
//header('Location:result4.php');
}
?>
<?php
}
?>
