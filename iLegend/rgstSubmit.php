<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'voterdb');
	$name =$_POST['name'];
	$reg =$_POST['reg'];
	$school =$_POST['school'];
	$dept =$_POST['dept'];
	$course =$_POST['course'];
	$s ="select * from votertable where reg = '$reg'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
		echo "Invalid Registration Number";
	}
	else{
		$reg = "insert into votertable(name, reg, school,dept, course) values ('$name','$reg','$school','$dept', '$course')";
		mysqli_query($con, $reg);
		echo "Registered";
	}
?>