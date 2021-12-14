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
	<title>Requested Money</title>
	<link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript">
        function rqstconfirm(){
            location.href = 'rqstconfirm.php';
        }
    </script>
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
        <h4>Balance:<input type="text" readonly="readonly" name="balance"value="<?php echo $row['bal']?>"></h4>
    </div>
    <?php
      
    ?>
    <div id="chatbox3">
        <?php
        $loggedin = $_SESSION['user'];
        $con = mysqli_connect('localhost','root','','userreg2');
        $query = "select * from requesttable where user ='$loggedin' ";
        $results = mysqli_query($con,$query);
        
                while ( $row = mysqli_fetch_assoc($results)) {
                ?>
              <p> <?php echo $row['loggduser'];?> is requesting <?php echo $row['bal'];?> 
              <button onclick="rqstconfirm()" id="buttonsend" type="button">Confirm</button>
              <button id="buttonsend" type="submit">Ignore</button></p>
              <?php 
            }?>
               <p> <?php echo "no other requests for you";?></p>      
        <?php ?>
    </div>
    
</div>
</div>

</body>
</html>