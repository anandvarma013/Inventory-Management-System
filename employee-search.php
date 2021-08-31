
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
    <link rel="stylesheet" href="style1.css">
<title></title>
</head>
<body>
<center>
  <div class="login-box">
<form method="post">
  <h1>Search Employee:</h1>
  <input type="text" name="search_no" placeholder="Search by Employee's No">
  <input type="submit" name="search" value="Search">
</form>
<?php
$conn=mysqli_connect('localhost','root','',"INVENTORY");
if(isset($_POST['search']))

{
  $search_no=$_POST['search_no'];
  $sql = "SELECT * FROM employee WHERE id = '$search_no'";
  $result = mysqli_query($conn,$sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "Employee no: "  .$row["id"]. " <br>Employee ID: " . $row["employee_id"]. "<br>First Name: " . $row["first_name"]. "<br>Last name: ".$row["last_name"]."<br>Mobile: " . $row["mobile"]. "<br>Email: " . $row["email"]. "<br>";
    }
  }
  else{
    echo "THERE IS NO SUCH PERSON IN THE RECORDS";
  }
}
?>
</center>
</body>
</html>

