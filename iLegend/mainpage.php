<!DOCTYPE html>
<?php
    session_start();
        if (!isset($_SESSION['user'])) {
            header('location:index.php');
        }
          $loggedin = $_SESSION['user'];
          $con = mysqli_connect('localhost','root','','userreg2');
          $query = "select * from usertable where user ='$loggedin'";
          $results = mysqli_query($con,$query);
          $row = mysqli_fetch_assoc($results);
?>
<html>
<head>
	<title>#MONEY Home Page</title>
    	<link rel="stylesheet" type="text/css" href="main.css">
        <script type="text/javascript">
            function sendmoney(){
                location.href='sendmoney.php';
            }
            function rqstmoney(){
                location.href='rqstmoney.php';
            }
            function rqstedmoney(){
                location.href='rqstedmoney.php';
            }
            function depomoney(){
                location.href='depomoney.php';
            }
            function wdrwmoney(){
                location.href='withdrawbal.php';
            }
        </script>
</head>
<body>
    <div class="container">
	   <div class="frmholder">
            <div class="frmheader2">
                <p class="kiwandeki">#GOATS</p>
                <p class="welcome"><?php echo $_SESSION['user'];?> online <b></b></p>
                <p class="logout"><a id="exit" href="logout.php">Log Out</a></p>
            </div>
            <div id="balancediv">
                <h4>Balance:<input type="text" readonly="readonly" name="balance" value="<?php echo $row['bal']?>"></h4> 
            </div>
            <div id="chatbox">
                <button onclick="sendmoney()" type="button">Send Goats</button>
                <button onclick="rqstmoney()" type="button">Request Goats</button>
                <button onclick="rqstedmoney()" type="button">Requested Goats</button>
                <button onclick="depomoney()" type="button">Deposit</button>
                <button onclick="wdrwmoney()" type="button">Withdraw</button>
                <button>Transaction History</button>
            </div>
        </div>
    </div>
</body>
</html>