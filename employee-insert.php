<?php
if(isset($_POST['save'])){
 $eid = $_POST['employee_id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $store = $_POST['store_id'];
  $pass = $_POST['pass'];

if($eid && $mobile && $pass && $store && $fname && $lname)
{
  $conn = mysqli_connect("localhost","root","","INVENTORY") or die("Connection Failed");

   $sql = "INSERT INTO employee( employee_id, first_name, last_name, mobile, email, store_ID, password) 
                            VALUES ('$eid','$fname','$lname','$mobile','$email','$store','$pass')";
   if (mysqli_query($conn, $sql)) {
        echo "inserted successfully";
        header("location:employeedisplay.php");
      }
      else{
        echo "record not inserted";
    }
}
else{
  echo "enter all spaces";
}
}

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <form  action="" method="post">
    <div class="login-box">
    <h1>Customer Details</h1>
      <div class="textbox">
        <input type="text" name="employee_id" value="" placeholder="Employee ID">
      </div>
      <div class="textbox">
        <input type="text" name="fname" value="" placeholder="First Name">
      </div>
      <div class="textbox">
          <input type="text" name="lname" value="" placeholder="Last Name">
      </div>
      <div class="textbox">
          <input type="number" name="mobile" value="" placeholder="Mobile Number">
      </div>
      <div class="textbox">
        <input type="text" name="email" value="" placeholder="Email">
      </div>
      <div class="textbox">
        <input type="number" name="store_id" value="" placeholder="Store ID">
      </div>
      <div class="textbox">
        <input type="password" name="pass" value="" placeholder="Password">
      </div>
      <input type="submit" class="btn" value="Register" name="save">
    
    </form>
  </div>
  </body>
</html>
