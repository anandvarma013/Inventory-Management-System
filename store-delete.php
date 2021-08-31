<?php

$conn = mysqli_connect('localhost','root','','INVENTORY');
$getid = $_GET['deleteid'];
$sql = "DELETE FROM warehouse WHERE `store_id` = '$getid'";
$qry = mysqli_query($conn, $sql);
if($qry) {
 header("location: store.php");
}


?>