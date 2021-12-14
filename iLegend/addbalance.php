<?php
	session_start();
	header('location:mainpage.php');
	$loggedin = $_SESSION['user'];
	$con = mysqli_connect('localhost','root','');
	if (!$con) {
		echo 'not connected';
	}
	if (!mysqli_select_db($con,'userreg2')) {
		echo "db not selected";
	}
	
	$bal = $_POST['bal'];
	$query = "select bal from usertable where user ='$loggedin' ";
	$results = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($results);
    $newbal = $row['bal'] + $bal;
	$reg = "update usertable set bal='$newbal' where user='$loggedin'";
	if (!mysqli_query($con,$reg)) {
		echo "not inserted";
	}
	else
	{
		echo "inserted";
	}


?>