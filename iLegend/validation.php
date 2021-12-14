<?php
	session_start();
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'userreg2');
	$name =$_POST['name'];
	$user =$_POST['user'];
	$phone =$_POST['phone'];
	$pass =$_POST['pass'];
	$s ="select * from usertable where user = '$user' && pass = '$pass'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	$_SESSION['user']= $user;
	if ($num ==1) {

		header('location:mainpage.php');
	}
	else{
		header('location:index.php');
	}

?>