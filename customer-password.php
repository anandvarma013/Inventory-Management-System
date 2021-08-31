<?php 
session_start();
$conn = mysqli_connect('localhost','root','','INVENTORY') or die("connection Failed");

if(isset($_POST['update'])){
$email = $_SESSION['cus_mail'];
$cun_pass = $_POST['cun_pass'];
$new_pass = $_POST['new_pass'];
$con_pass = $_POST['con_pass'];

$query = "SELECT * FROM customer WHERE email = '$email' AND new_password = '$cun_pass'";

$sql = mysqli_query($conn,$query);
$row = mysqli_fetch_array($sql);
if($row){
	if($new_pass == $con_pass){
		$query1 = "UPDATE customer SET new_password = '$new_pass', confirm_password = '$con_pass' WHERE email = '$email'";
		$sql2 = mysqli_query($conn,$query1);
		if($sql2){
			echo "<h2>Success</h2>";
		}

	}
	else{
		echo "Passwords are not equal";
	}
}
else{
	echo "<h1>Check It</h1>";
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<center>
		<div class="login-box">
			<h1>Change Password</h1>
			<form action="" method="post">
			<div class="textbox">
				<input type="password" name="cun_pass" placeholder="Current Password">
			</div>
			<div class="textbox">
				<input type="password" name="new_pass" placeholder="New Password">
			</div>
			<div class="textbox">
				<input type="password" name="con_pass" placeholder="Confirm Password">
			</div>
			<input type="submit" name="update" class="btn" value="Update">
		</form>
		<a href="customer-profile.php"><button class="btn">Back</button></a>
		</div>
	</center>
</body>
</html>