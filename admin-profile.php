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
		<h1>Admin Profile</h1>
		
		<?php
session_start();
$conn = mysqli_connect('localhost','root','','INVENTORY');

$user = $_SESSION['admin_user'];
$query = "SELECT * FROM admin WHERE Username = '$user'";
$result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
if($count>0){
	$_SESSION['admin_id'] = $row['manger_id'];
	$user = $row['Username'];
	$fn = $row["first_name"];
	$ln = $row['last_name'];
	$mail = $row['email'];
	
	echo '<tr><td>'.'Username:'.'</td><td>'.$user.'</td></tr><br>';
	echo '<tr><td>'.'Firstrname:'.'</td><td>'.$fn.'</td></tr><br>';
	echo '<tr><td>'.'Lastname:'.'</td><td>'.$ln.'</td></tr><br>';
	echo '<tr><td>'.'Email:'.'</td><td>'.$mail.'</td></tr>';
}
else{
	echo "moda";
}
?>
</table>
</div>
<table><tr><td><a href="admin-password.php"><button class="btn1">Change Password</button></a></td></tr></table>
<table><tr><td><a href="adminhome.php"><button class="btn1">Back</button></a></td></tr></table>
	
</center>
</body>
</html>