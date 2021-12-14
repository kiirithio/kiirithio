<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="main.css">
    <?php include('registererr.php');?>
</head>
<body>
	<div class="container">
    	<div class="frmholder">
    		<div class="frmheader">
    			<p id="pp">#MONEY</p>
    		</div>
            
    		<form action="register.php" method="post">

    			<div>
    				<h5>Your Name</h5>
    				<input type="text" name="name">
                    <div class="error">*<?php echo $nameErr;?></div>
    			</div>
    			<div>
    				<h5>Choose a username</h5>
    				<input type="text" name="user">
                    <div class="error">*<?php echo $userErr;?></div>
    			</div>
    			<div>
    				<h5>Phone Number</h5>
    				<input type="text" name="phone">
    			</div>
    			<div>
    				<h5>Choose Password</h5>                    
    				<input type="password" name="pass">
                    <div class="error">*<?php echo $passErr;?></div>
    			</div>
    			<div>
    				<button type="submit">Submit</button>
    			</div>
    		</form>
            
    	</div>
    </div>
</body>
</html>