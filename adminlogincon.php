<?php
session_start();
$conn = mysqli_connect("localhost","root","","INVENTORY") or die("Connection Failed");

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);
      
        $sql = "select * from admin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        echo "$count";
          
        if($count == 1){  
            $_SESSION['admin_user']=$username;
            echo "<h1><center> Login successful </center></h1>";
           header("location:adminhome.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
?>