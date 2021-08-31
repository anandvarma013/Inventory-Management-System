
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <center>
 <div class="txt"
 >
    <table cellspacing="10px">
    <h1>Products List</h1>
    <?php
$conn = mysqli_connect('localhost','root','','INVENTORY');

$sql = "SELECT * FROM PRODUCTS";
$data = mysqli_query($conn,$sql);

$total = mysqli_num_rows($data);
echo "<th>"."S.no"."</th><th>"."Code"."</th><th>"."Name"."</th><th>"."description"."</th><th>"."Product"."</th><th>"."Price"."</th>";
if($total!=0)
{
  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $name = $row['product_code'];
    $roll = $row['product_name'];
    $sem = $row['product_desc'];
    $img = $row['product_img_name'];
    $price = $row['price'];

   /* echo "$id"."</br>";
    echo "$name"."</br>";
    echo "$roll"."</br>";
    echo "$sem"."</br>";
    echo "$cgpa"."</br>"."</br>";*/
    echo "<tr><td>".$id."</td><td> ".$name."</td><td>".$roll."</td><td>".$sem."</td><td>"."<img src='images/".$img."'>"."</td><td>".$price."</td></tr>";
  }
}
?>
</table>
 </div>
</center>
</body>
</html>