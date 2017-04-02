<?php 
    require 'Connection.php';
    if($_POST['searchcontent'] != null){
        $searchc = trim($_POST['searchcontent']);



        $sql = "SELECT * FROM users WHERE username LIKE '%$searchc%'";
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
    else{
        echo "Please tell us what you are searching for.";
    }
?>