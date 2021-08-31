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
	$first = $_SESSION['fn'];
	$last = $_SESSION['ln'];
	echo "<h1>Welcome $first $last</h1>";
	?>
	<a href="emp-profile.php"><button class="btn1">Profile</button></a>
	<a href="customerdisplay.php"><button class="btn1">Customer Details</button></a>
	<a href="productemployee.php"><button class="btn1">Products List</button></a>
	<a href="supplierdisplay.php"><button class="btn1">Supplier List</button></a>
	<a href="customer-search.php"><button class="btn1">Customer Search</button></a>
	<a href="employeelogout.php"><button class="btn1">Logout</button></a>
</div>
</body>
</html>