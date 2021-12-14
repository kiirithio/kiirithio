<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'userreg2');
	$name =$_POST['name'];
	$user =$_POST['user'];
	$phone =$_POST['phone'];
	$pass =$_POST['pass'];
	$s ="select * from usertable where user = '$user'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
	if ($num ==1) {
		echo "username already exists";
	}
	else{
		$reg = "insert into usertable(name, user, phone,pass) values ('$name','$user','$phone','$pass')";
		mysqli_query($con, $reg);
		echo "Account created";
	}
	$nameErr = $userErr = $passErr = "";
	$name = $user = $pass = "";

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (empty($_POST["name"])) {
			$nameErr = "name required";
		}
		else{
			$user = test_input($_POST["user"]);
		}
		if (empty($_POST["user"])) {
			$userErr = "username required";
		}
		else{
			$user = test_input($_POST["user"]);
		}
		if (empty($_POST["pass"])) {
			$passErr = "password required";
		}
		else{
			$pass = test_input($_POST["pass"]);
		}
		
		
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>