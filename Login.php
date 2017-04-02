<?php
    require('Connection.php');
    require('CleanInput.php');
    //session_start();
     /////////////////////PHP//////////////////////
     
// define variables and set to empty values
$Err = "";
$username = $pwd = "";

    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["password"]);
/////////////////////Check username and password to login//////////////////////
$sql = "SELECT id, username, password FROM Login WHERE username = '$username' AND password = '$pwd'";
$result = $con->query($sql);

$row = mysqli_fetch_row($result);

$checking = false;
    
    
/////////////////////Check username//////////////////////
    if ($row[1] == $username && $row[2] == $pwd) {
        echo "You are login";
    /////////////////////give username session//////////////////////
    //$_SESSION['username'] = $username;
        $checking = true;
  } else {
        $Err = "invalid username and password.";
  }
    
/////////////////////Check redirect//////////////////////
if($checking){
    sleep(1);
    header('Location: admin.php');
}
  
} //end



    
$con->close();
    

    /////////////////////PHP//////////////////////
?>
