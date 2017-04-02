<?php
     

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "super_admin";

$con = mysqli_connect($servername, $username, $password, $dbName);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$con1 = mysqli_select_db($con, 'CRManagement');


//echo "Connected successfully";



?>

