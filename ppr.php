<?php 

	session_start();

	include_once("connection.php");

	$email=$_POST['username'];
	$pw=$_POST['password'];

	$check="SELECT * FROM user WHERE email='$email' && password='$pw'";

	$result=mysqli_query($conn,$check);

	$num=mysqli_num_rows($result);

	if($num==0){

		echo "Username Invalid or Password Invalid";
	}else{

		$row=mysqli_fetch_array($result);

		$username=$row['email'];
		$fname=$row['fname'];

		$_SESSION['username']=$username;
		$_SESSION['fname']=$fname;

		var_dump($_SESSION['fname']);
		header('location:subjects.php');
	}




 ?>