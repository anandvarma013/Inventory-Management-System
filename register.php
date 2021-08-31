<?php
 $name = $_POST['customer_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $npassword = $_POST['new_pass'];
  $cpassword = $_POST['con_pass'];

if($email && $mobile && $npassword && $cpassword)
{
  $conn = mysqli_connect("localhost","root","","INVENTORY") or die("Connection Failed");
  if($npassword == $cpassword){
                $sql = "INSERT INTO customer( customer_name, email, address, mobile, new_password, confirm_password) 
                            VALUES ('$name','$email','$address','$mobile','$npassword','$cpassword')";
   if (mysqli_query($conn, $sql)) {
        echo "inserted successfully";
        header("location:registered.php");
      }
      else{
        echo "record not inserted";
      }
    
  }
  else{
    echo "passwords are not equal";
  }
}
else{
  echo "enter all spaces";
}

 ?>

