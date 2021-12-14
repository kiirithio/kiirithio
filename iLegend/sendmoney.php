<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
$loggedin = $_SESSION['user'];
      $con = mysqli_connect('localhost','root','','userreg2');
      $query = "select * from usertable where user ='$loggedin' ";
      $results = mysqli_query($con,$query);
      $row = mysqli_fetch_assoc($results);
      ?>
<html>
<head>
	<title>Send Money</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="container">
	<div class="frmholder">
    <div class="frmheader2">
        <p class="kiwandeki">#MONEY</p>
        <p class="welcome"><?php echo $_SESSION['user'];?> online <b></b></p>
        <p class="logout"><a id="exit" href="logout.php">Log Out</a></p>
        <p class="logout"><a id="" href="mainpage.php">Home</a></p>
        <div style="clear:both"></div>
    </div>
    <div id="balancediv">
        <h4>Balance:<input type="text" readonly="readonly" name="balance" value="<?php echo $row['bal']?>"></h4>
    </div> 
    <div id="chatbox">
        <form action="sendmoneyto.php" method="post">
            <h5>Enter username to send money</h5>
            <input type="text" name="user">
            <h5>Enter amount to send</h5>
            <input type="text" name="bal" placeholder="KES">
            <button id="buttonsend" type="submit">Send</button>
        </form>
    </div>
    
</div>
</div>

</body>
</html>