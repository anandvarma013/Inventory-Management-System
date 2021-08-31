
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
  <center>
  <div class="txt">
    <table cellspacing="10px">
    <h1>Suppliers list</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM SUPPLIERS";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."S.no"."</th><th>"."Name"."</th><th>"."mobile"."</th><th>"."email"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['supplier_id'];
    $name = $row['supplier_name'];
    $roll = $row['mobile'];
    $sem = $row['email'];

    echo "<tr><td>".$id."</td><td> ".$name."</td><td>".$roll."</td><td>".$sem.
    "</td></tr>";
  }
}
?>
</table>
  </div>
  <table><tr><td><a href="supplier.html"><button class="btn1">Add</button></a></td></tr><tr><td><a href="employeehome.php"><button class="btn1">Back</button></a></td></tr></table>
</center>
</body>
</html>