
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <center>
 <div class="txt">
    <table cellspacing="10px">
    <h1>Stores List</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM warehouse";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."STORE ID"."</th><th>"."STORE NAME"."</th><th>"."Quantity"."</th><th>"."MANAGER ID"."</th><th>"."Action"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['store_id'];
    $name = $row['store_name'];
    $roll = $row['quantity'];
    $mid = $row['manager_id'];

  
    echo "<tr><td>".$id."</td><td> ".$name."</td><td>".$roll."</td><td>".$mid."</td><td><a href= 'store-edit.php?edit=$id' >Edit</a></td><td><a href='store-delete.php?deleteid=$id' >Delete</a></td></tr>";
  }
}
?>
</table>
 </div>
 <table><div class="login-box">
   <tr><td><a href="store-add.php"><button class="btn1" color="black">Add</button></a></td></tr>
   <tr><td><a href="adminhome.php"><button class="btn1" color="black">Back</button></a></td></tr>
 </div></table>
</center>
</body>
</html>