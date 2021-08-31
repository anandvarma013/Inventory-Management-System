<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');

if(isset($_POST['add']))

{

    $name = $_POST['store_name'];
    $roll = $_POST['quantity'];
    $mid = $_POST['manager_id'];
  
$sql = "INSERT INTO `warehouse`( `store_name`, `quantity`, `manager_id`) VALUES ('$name','$roll','$mid') ";
$result = $conn->query($sql);

if ($result) {
  echo "RECORD INSERTED SUCCESSFULLY";
  header("location: store.php");
}
else {
  echo "Error inserting record: " . $conn->error;
}
}


?>

<html>
<head>
	<meta charset="UTF-8"> 
   <link rel="stylesheet" type="text/css" href="style1.css">
	<title></title>
</head>
<body>
	<center>
	<form  action="" method="post">
    <div class="login-box">
    <h1>Store Details</h1>
      <div class="textbox">
        <input type="text" name="store_name" value="" placeholder="Store Name">
      </div>
      <div class="textbox">
        <input type="number" name="quantity" value="" placeholder="Store Capacity">
      </div>
      <div class="textbox">
          <input type="number" name="manager_id" value="" placeholder="Manager ID">
      </div>
      <input type="submit" class="btn" value="Add" name="add">
    
    </form>
</center>
</body>
</html>