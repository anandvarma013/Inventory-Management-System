<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="index-box">
	<?php 
	session_start();
	echo "<h1>Welcome </h1>";
	?>
	<a href="customer-profile.php"><button class="btn1">Profile</button></a>
	<a href="customerproduct.php"><button class="btn1">Products</button></a>
	<a href="customerlogout.php"><button class="btn1">Logout</button></a>
</div>
</body>
</html>
