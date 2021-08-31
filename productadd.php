<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');

if(isset($_POST['add']))

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
  
$sql = "INSERT INTO `products`( `code`, `name`, `product_desc`, `image`, `price`, `no_of_items`, `expiry_date`, `store_id`, `supplier_id`) VALUES ('$code','$name','$desc','$img','$price','$item','$date','$store','$sup') ";
$result = $conn->query($sql);

if ($result) {
  echo "RECORD INSERTED SUCCESSFULLY";
  header("location: productemployee.php");
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
      <input type="submit" class="btn" value="Add" name="add">
    
    </form>
</center>
</body>
</html>