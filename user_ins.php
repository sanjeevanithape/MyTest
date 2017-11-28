<?php
include("conn.php");
if(isset($_POST['sub'])){

			$fname=mysqli_real_escape_string($con,$_POST['fname']);
			$lname=mysqli_real_escape_string($con,$_POST['lname']);
			$email=mysqli_real_escape_string($con,$_POST['email']);
			$psw=mysqli_real_escape_string($con,$_POST['psw']);

			$get_email="select * from users where email='$email'";
			$run_email=mysqli_query($con,$get_email);
			$check=mysqli_num_rows($run_email);

			if($check==1){
				echo "<script>alert('Email Id Already Registered . Please Try Another Email ID')</script>";
				exit();
			}
			
			else{
				$insert="insert into users (fname,lname,email,psw) values ('$fname','$lname','$email','$psw')";
				$run_insert=mysqli_query($con,$insert);
				if($run_insert){
					$_SESSION['email']=$email;
					echo "<script>alert('Registration Successfully Done.')</script>";
					echo "<script>window.open('home.php','_self')</script>";
				}
			}
		}	
?>
