<?php
	session_start();
	header('location:rqstedmoney.php');
	$loggedin = $_SESSION['user'];
	$con = mysqli_connect('localhost','root','','userreg2');
	$query = "select * from requesttable where user ='$loggedin' ";
	$results = mysqli_query($con,$query);
	$user = mysqli_fetch_assoc($results);
	$query = "select bal from requesttable where user ='$loggedin' ";
  	$results = mysqli_query($con,$query);
  	$bal = mysqli_fetch_assoc($results);
  	$s ="select * from usertable where user = '$loggedin'";
  	$result = mysqli_query($con, $s);
  	$num = mysqli_num_rows($result);
  if ($num ==1) {

    $query = "select * from usertable where user ='$loggedin' ";
    $results = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($results);
    $newbal = $row['bal'] - $bal['bal'];
    
    $reg = "update usertable set bal='$newbal' where user='$loggedin'";
    $results = mysqli_query($con,$reg);
    $loggduser = $user['loggduser'];
    $query = "select * from usertable where user ='$loggduser' ";
    $results = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($results);
    $newbal = $row['bal'] + $bal['bal'];
    
    $reg = "update usertable set bal='$newbal' where user='$loggduser'";
    $results = mysqli_query($con,$reg);
    $delete = $bal['bal'];
  	$rqstrefresh = "DELETE FROM requesttable WHERE bal ='$delete' ";
    $refresh = mysqli_query($con,$rqstrefresh);
  }

  else{
    echo "user does not exist";;
  }

?>