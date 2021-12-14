<?php
	session_start();
	header('location:mainpage.php');
	$loggedin = $_SESSION['user'];
	$con = mysqli_connect('localhost','root','','userreg2');
	$user = $_POST['user'];
	$bal = $_POST['bal'];
	$s ="select * from usertable where user = '$user'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {

		$query = "select bal from usertable where user ='$loggedin' ";
		$results = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($results);
		$newbal = $row['bal'] - $bal;
		$reg = "update usertable set bal='$newbal' where user='$loggedin'";
		$results = mysqli_query($con,$reg);

		$query = "select bal from usertable where user ='$user' ";
		$results = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($results);
		$newbal = $row['bal'] + $bal;
		$reg = "update usertable set bal='$newbal' where user='$user'";
		$results = mysqli_query($con,$reg);
	}

	else{
		echo "user does not exist";;
	}

?>
