<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');
$getid = $_GET['edit'];
$sqledit = "SELECT * FROM warehouse WHERE $getid";
if(isset($_POST['update']))

{

    $name = $_POST['store_name'];
    $roll = $_POST['quantity'];
    $mid = $_POST['manager_id'];
  
$sql = "UPDATE warehouse SET `store_name`='$name',`quantity`='$roll',`manager_id`='$mid' WHERE store_id='$getid' ";
$result = $conn->query($sql);

if ($result) {
  echo "RECORD UPDATED SUCCESSFULLY";
  header("location: store.php");
}
else {
  echo "Error updating record: " . $conn->error;
}
}


?>

<!DOCTYPE html>
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
      <input type="submit" class="btn" value="UPDATE" name="update">
    
    </form>
</center>
</body>
</html>