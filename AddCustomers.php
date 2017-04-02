<?php

require('Connection.php');
require('CleanInput.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = test_input($_POST["firstName"]);
    $lastName = test_input($_POST["lastName"]);
    
    $sql = "INSERT INTO CustomerInfo (firstname, lastname) VALUES ($firstName, $lastName)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
    
    
}













?>