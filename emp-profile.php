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
		<h1>Employee Profile</h1>
		
		<?php
session_start();
$conn = mysqli_connect('localhost','root','','INVENTORY');

$id = $_SESSION['emp_id'];
$query = "SELECT * FROM employee WHERE id = '$id'";
$result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
if($count>0){
	$_SESSION['employee_id'] = $row['employee_id'];
	$user = $row['employee_id'];
	$fn = $row["first_name"];
	$ln = $row['last_name'];
	$mail = $row['email'];
	$mobile = $row['mobile'];

	
	echo '<tr><td>'.'ID:'.'</td><td>'.$user.'</td></tr><br>';
	echo '<tr><td>'.'Firstrname:'.'</td><td>'.$fn.'</td></tr><br>';
	echo '<tr><td>'.'Lastname:'.'</td><td>'.$ln.'</td></tr><br>';
	echo '<tr><td>'.'Email:'.'</td><td>'.$mail.'</td></tr>';
	echo '<tr><td>'.'Mobile Number:'.'</td><td>'.$mobile.'</td></tr>';
}
else{
	echo "moda";
}
?>
</table>
</div>
<table><tr><td><a href="employee-password.php"><button class="btn1">Change Password</button></a></td></tr></table>
<table><tr><td><a href="employeehome.php"><button class="btn1">Back</button></a></td></tr></table>
	
</center>
</body>
</html>