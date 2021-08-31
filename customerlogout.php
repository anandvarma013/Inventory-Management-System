<?php
session_start();
unset($_SESSION["cname"]);
unset($_SESSION["pass"]);
header("Location:customer.html");
 ?>
