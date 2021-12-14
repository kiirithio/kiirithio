


<!DOCTYPE html>
<?php
	if(isset($_POST['submit'])){


	$fn=$_POST['fn'];
	$sn=$_POST['sn'];
	$ch=$_POST['ch'];


	if ($ch='+') {
		$res=$fn+$sn;
	}
	elseif ($ch='-') {
		$res=$fn-$sn;
	}else {
		$res=$fn*$sn;
	}
}

?>
<html>
<head>
	<title>calculate</title>
</head>
<body>
	<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Your result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php echo @ $res;?>"></th>
			</tr>
			<tr>
				<th>Enter your fisrt number</th><th><input type="number" value="<?php echo @$fn;?>" name="fn"/></th>
			</tr>
			<th>Enter your second number</th><th><input type="number" value="<?php echo @$sn;?>" name="sn"/></th>
			<tr>
				<th>Select your choice.</th>
				<th><select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
					
				</select>
				</th>
			</tr>
			<tr><th colspan="2">
				<input type="submit"
				name="submit"
				value="calculate">
			</th>
				
			</tr>
		</table>
	</form>
</body>
</html>
