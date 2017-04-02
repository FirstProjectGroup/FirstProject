<?php
    require 'Connection.php';
   

    if (isset($_POST['alluser'])){
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)> 0){
        while ($row = mysqli_fetch_assoc($result)){ 
            echo "id:" . $row['id']. "  username: ".$row['username']."  password: ".$row['password']. "</br>";
        }
    }
    else{
        echo "no results";
    }
    }

?>