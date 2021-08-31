
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
    <h1>Employee table</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM EMPLOYEE";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."S.no"."</th><th>"."Employee ID"."</th><th>"."first_name"."</th><th>"."last_name"."</th><th>"."Mobile"."</th><th>"."Email"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $name = $row['employee_id'];
    $roll = $row['first_name'];
    $roll1 = $row['last_name'];
    $sem = $row['mobile'];
    $mail = $row['email'];

   /* echo "$id"."</br>";
    echo "$name"."</br>";
    echo "$roll"."</br>";
    echo "$sem"."</br>";
    echo "$cgpa"."</br>"."</br>";*/
    echo "<tr><td>".$id."</td><td> ".$name."</td><td>".$roll."</td><td>".$roll1."</td><td>".$sem."</td><td>".$mail."</td><td><a href= 'employee-edit.php?edit=$id' >Edit</a></td><td><a href='employee-delete.php?deleteid=$id' >Delete</a></td></tr>";
  }
}
?>
</table>
  </div>
  <table><tr><td><a href="employee-insert.php"><button class="btn1">Add</button></a></td></tr></table>
   <table><tr><td><a href="adminhome.php"><button class="btn1">Back</button></a></td></tr></table>
</center>
</body>
</html>