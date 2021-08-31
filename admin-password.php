<?php 
session_start();
$conn = mysqli_connect('localhost','root','','INVENTORY') or die("connection Failed");

if(isset($_POST['update'])){
$aid = $_SESSION['admin_id'];
$cun_pass = $_POST['cun_pass'];
$new_pass = $_POST['new_pass'];
$con_pass = $_POST['con_pass'];

$query = "SELECT * FROM admin WHERE manger_id = '$aid' AND password = '$cun_pass'";

$sql = mysqli_query($conn,$query);
$row = mysqli_fetch_array($sql);
if($row){
	if($new_pass == $con_pass){
		$query1 = "UPDATE admin SET Password = '$new_pass' WHERE manger_id = '$aid'";
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
		<a href="emp-profile.php"><button class="btn">Back</button></a>
		</div>
	</center>
</body>
</html>