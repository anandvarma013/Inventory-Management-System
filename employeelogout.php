<?php
session_start();
unset($_SESSION["eid"]);
unset($_SESSION["pass_e"]);
header("Location:employee.html");
 ?>
