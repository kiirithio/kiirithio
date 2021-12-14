<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="main.css">
    <?php include('validationerr.php');?>
</head>
<body>
    <div class="container">
    	<div class="frmholder">
    		<div class="frmheader">
    			<p id="pp">#MONEY</p>
    		</div>
    		<form action="validation.php" method="post">
                <form action="validationerr.php" method="post">
    			<div>
    				<h5>Username</h5>
                    <span class="error">*<?php echo $userErr;?></span>
    				<input type="text" name="user">
    			</div>
    			<div>
    				<h5>Password</h5>
                    <span class="error">*<?php echo $passErr;?></span>
    				<input type="password" name="pass">
    			</div>
    			<div>
    				<button type="submit" name="login">Log In</button>
    			</div>
    			<br/>
    			<div>
    				<a href="">Forgot Password?</a>
    			</div>
    			<div>
    				<h3>OR</h3>
    			</div>
            </form>
            </form>
            <form action="signup.php" method="post">
    			<div>
    				<button id="btn2" type="submit" name="signup">Create Account</button>
    			</div>
    		</form>
    	</div>
    </div>
</body>
</html>