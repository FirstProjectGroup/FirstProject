<?php
                
        $name = $_POST['userinfon'];
        $password = $_POST['userinfop'];
        require "Connection.php";
        $sql = "INSERT INTO users(`id`, `username`, `password`) VALUES ('3','$name','$password')";
        if(mysqli_query($con,$sql)){
            echo "insert success";
        }
        else{
            echo "insert failed";
        }
?>