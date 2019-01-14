<?php
	session_start();
//connecting database
	$username ="";
	$email="";
	$dbcon = mysqli_connect('localhost','root',
		'','users') or die("unable to connect");
//on registering
	if(isset($_POST['register']))
	{

	$username   = mysqli_real_escape_string($dbcon,$_POST['username']);
	$email 		= mysqli_real_escape_string($dbcon,$_POST['email']);
	$password_1 = mysqli_real_escape_string($dbcon,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($dbcon,$_POST['password_2']);
	
//to check if form empty
		/*if(empty($username)){
				    $message="username can't be empty";
				     echo "<script type='text/javascript'>alert('$message');</script>";
			}
		if(empty($email)){
					$message="email can't be empty";
					 echo "<script type='text/javascript'>alert('$message');</script>";
			}
		if(empty($password)){
					$message="**password can't be empty**"; 
					 echo "<script type='text/javascript'>alert('$message');</script>";
			}*/

		if($password_1 != $password_2){
					$message="passwords did not match";
					 echo "<script type='text/javascript'>alert('$message');</script>";
			}
	
//if no errors
		if($password_1 == $password_2)
		{  
 
		$password=md5($password_1);//encryption
		$sql ="INSERT INTO users (username,email,password) VALUES ('
		$username','$email','$password')";

		mysqli_query($dbcon,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		header('location: index.php');//home page redirecting

		}
	}	



	//logout
	if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			header('location:register.php');# code...
		}	
?>













