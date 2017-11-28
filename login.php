<?php
include("conn.php");
if(isset($_POST['log'])){
			$email=mysqli_real_escape_string($con,$_POST['email']);
			$psw=mysqli_real_escape_string($con,$_POST['psw']);

			$get_user="select * from users where email='$email' AND psw='$psw'";
			$run_user=mysqli_query($con,$get_user);
			$check=mysqli_num_rows($run_user);
			if($check==1){
				$_SESSION['email']=$email;
				echo "<script>window.open('home.php','_self')</script>";
			}
			else{
				echo "<script>alert('Username Or Password Invalid.Please Fill Correct Username & Password')</script>";
			}
	}
?>