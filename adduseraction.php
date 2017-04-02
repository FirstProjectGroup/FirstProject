<?php
        session_start();
        
        require "Connection.php";
        $name = trim($_POST['userinfon']);
        $password = trim($_POST['userinfop']);
        
        
        
        $sql = "INSERT INTO users(username, password) VALUES ('$name','$password')";
        
        if($con->query($sql)){
            
            
            $_SESSION['UIFRS'] = "insert success";
            
            header ("Location: adduser.php");
            
        }
        else{
            $_SESSION['UIFRS'] = "insert failed";
            header ("Location: adduser.php");
        }
            
?>