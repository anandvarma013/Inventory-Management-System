<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<center>
	<div class="txt">
		<table>
		<h1>Your Profile</h1>
		
		<?php
session_start();
$conn = mysqli_connect('localhost','root','','INVENTORY');

$mail = $_SESSION['mail'];
$query = "SELECT * FROM customer WHERE email = '$mail'";
$result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
if($count>0){
	$_SESSION['cus_mail'] = $row['email'];
	$user = $row['customer_name'];
	$mail = $row['email'];
	$address = $row['address'];
	$mobile = $row['mobile'];

	
	echo '<tr><td>'.'Name:'.'</td><td>'.$user.'</td></tr><br>';
	echo '<tr><td>'.'Email:'.'</td><td>'.$mail.'</td></tr><br>';
	echo '<tr><td>'.'Address:'.'</td><td>'.$address.'</td></tr><br>';
	echo '<tr><td>'.'Mobile Number:'.'</td><td>'.$mobile.'</td></tr>';
}
else{
	echo "moda";
}
?>
</table>
</div>
<table><tr><td><a href="customer-password.php"><button class="btn1">Change Password</button></a></td></tr></table>
<table><tr><td><a href="customerhome.php"><button class="btn1">Back</button></a></td></tr></table>
	
</center>
</body>
</html>