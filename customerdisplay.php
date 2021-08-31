
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
  <center>
  <div class="txt">
    <table>
    <h1>Customers table</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM CUSTOMER";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."S.no"."</th><th>"."Name"."</th><th>"."email"."</th><th>"."address"."</th><th>"."Mobile"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['ID'];
    $name = $row['customer_name'];
    $roll = $row['email'];
    $sem = $row['address'];
    $cgpa = $row['mobile'];

   /* echo "$id"."</br>";
    echo "$name"."</br>";
    echo "$roll"."</br>";
    echo "$sem"."</br>";
    echo "$cgpa"."</br>"."</br>";*/
    echo "<tr><td>".$id."</td><td> ".$name."</td><td>".$roll."</td><td>".$sem."</td><td> ".$cgpa.
    "</td></tr>";
  }
}
?>
</table>
  </div>

</center>
</body>
</html>