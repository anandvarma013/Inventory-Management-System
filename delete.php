<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');
$getid = $_GET['deleteid'];
$sql = "DELETE FROM products WHERE `id` = '$getid'";
$qry = mysqli_query($conn, $sql);
if($qry) {
 header("location: productemployee.php");
}


?>