<?php
  $conn = mysqli_connect('localhost','root','','INVENTORY');
  session_start();
    $cmail = $_POST['cmail'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $cmail = stripcslashes($cmail);  
        $pass = stripcslashes($pass);  
        $cmail = mysqli_real_escape_string($conn, $cmail);  
        $pass = mysqli_real_escape_string($conn, $pass);  

        echo "$cmail";
      
        $sql = "select * from customer where email = '$cmail' and new_password = '$pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        echo "$count";
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            $_SESSION['cus_id']=$row['ID'];
            $_SESSION['name']=$row['customer_name'];
            $_SESSION['mail']=$row['email'];
            header("location:customerhome.php");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
  
?>