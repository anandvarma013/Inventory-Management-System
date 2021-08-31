<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');
$getid = $_GET['edit'];
$sqledit = "SELECT * FROM products WHERE $getid";
if(isset($_POST['update']))

{

  $code = $_POST['code'];
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $img = $_POST['img'];
  $price = $_POST['price'];
  $item = $_POST['item'];
  $date = $_POST['date'];
  $store = $_POST['store'];
  $sup = $_POST['sup'];
  
$sql = "UPDATE products SET `code`='$code',`name`='$name',`product_desc`='$desc',`image`='$img',`price`='$price',`no_of_items`='$item',`expiry_date`='$date',`store_id`='$store',`supplier_id`='$sup'  WHERE id='$getid' ";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "VISITOR RECORD UPDATED SUCCESSFULLY";
  header("location: productemployee.php");
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
    <h1>Product Details</h1>
      <div class="textbox">
        <input type="text" name="code" value="" placeholder="Product Code">
      </div>
      <div class="textbox">
        <input type="text" name="name" value="" placeholder="Product Name">
      </div>
      <div class="textbox">
          <input type="text" name="desc" value="" placeholder="Product Description">
      </div>
      <div class="textbox">
          <input type="text" name="img" value="" placeholder="Image address">
      </div>
      <div class="textbox">
        <input type="number" name="price" value="" placeholder="Price">
      </div>
      <div class="textbox">
        <input type="number" name="item" value="" placeholder="No of items">
      </div>
      <div class="textbox">
        <input type="date" name="date" value="" placeholder="yyyy-mm-dd">
      </div>
      <div class="textbox">
        <input type="number" name="store" value="" placeholder="Store ID">
      </div>
      <div class="textbox">
        <input type="number" name="sup" value="" placeholder="Supplier ID">
      </div>
      <input type="submit" class="btn" value="UPDATE" name="update">
    
    </form>
</center>
</body>
</html>