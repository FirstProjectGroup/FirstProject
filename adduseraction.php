<<<<<<< HEAD
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
            
=======
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
>>>>>>> origin/yunkai
?>