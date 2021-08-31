
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <center>
  <div class="txt">
    <table cellspacing="10">
    <h1>Payments</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM invoice";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."S.no"."</th><th>"."Customer ID"."</th><th>"."Amount Paid"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $name = $row['cust_id'];
    $roll = $row['paid'];

    echo "<tr><td>".$id."</td><td> ".$name."</td><td>Rs ".$roll."</td></tr>";
  }
}
?>
</table>
  </div>
</center>
</body>
</html>