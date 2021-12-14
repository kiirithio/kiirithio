<?php
	session_start();
	header('location:mainpage.php');
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'userreg2');
	$user =$_POST['user'];
	$bal =$_POST['bal'];
	$loggduser =$_SESSION['user'];
	$s ="select * from usertable where user = '$user'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
		$reg = "insert into requesttable(user, bal,loggduser) values ('$user','$bal','$loggduser')";
		mysqli_query($con, $reg);
		echo "Account created";
	}
	else{
		echo "user not found";
	}

?>