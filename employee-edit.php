<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');
$getid = $_GET['edit'];
$sqledit = "SELECT * FROM employee WHERE $getid";
if(isset($_POST['update']))

{

  $name = $_POST['fn'];
  $desc = $_POST['ln'];
  $img = $_POST['mobile'];
  $price = $_POST['email'];
  $item = $_POST['store_id'];
  
$sql = "UPDATE employee SET `first_name`='$name',`last_name`='$desc',`mobile`='$img',`email`='$price',`store_ID`='$item' WHERE id='$getid' ";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo " RECORD UPDATED SUCCESSFULLY";
  header("location: employeedisplay.php");
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
    <h1>Employee Upadte</h1>
      <div class="textbox">
        <input type="text" name="fn" value="" placeholder="First Name">
      </div>
      <div class="textbox">
          <input type="text" name="ln" value="" placeholder="Last Name">
      </div>
      <div class="textbox">
          <input type="number" name="mobile" value="" placeholder="Mobile Number">
      </div>
      <div class="textbox">
        <input type="text" name="email" value="" placeholder="Email">
      </div>
      <div class="textbox">
        <input type="number" name="store_id" value="" placeholder="Store ID">
      </div>
      <input type="submit" class="btn" value="UPDATE" name="update">
    
    </form>
</center>
</body>
</html>