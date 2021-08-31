<?php
$conn = mysqli_connect("localhost","root","","INVENTORY") or die("Connection Failed");
session_start();

    $eid = $_POST['eid'];  
    $pass = $_POST['pass_e'];  
      
        //to prevent from mysqli injection  
        $eid = stripcslashes($eid);  
        $pass = stripcslashes($pass);  
        $eid = mysqli_real_escape_string($conn, $eid);  
        $pass = mysqli_real_escape_string($conn, $pass);
      
        $sql = "select * from employee where employee_id = '$eid' and password = '$pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        echo "$count";
        $ram = $row['name'];
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            $_SESSION['emp_id'] = $row['id'];
            $_SESSION['fn'] = $row['first_name'];
            $_SESSION['ln'] = $row['last_name'];
           header("location:employeehome.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
?>