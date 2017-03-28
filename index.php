<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
  
    <div class="loginPage">
        
        <form action = "index.php" , method = "get">
            
            Username/Email:
            <input type="text" name="username" placeholder = "Enter your username.">
            
            </br>
            Password:
            <input type="password" placeholder = "Enter your password" name="password"></br>
            <input type="Submit" value="Login">
            </br>
            <input type="reset" name="password">
        </form>
        
    </div>
    <?php
    if ($_GET ["username"] != null && $_GET ["password"] != null){
        if ($_GET ["username"] == "admin" && $_GET ["password"] == "admin"){
            header( 'Location: admin.php' );
        }
        if ($_GET ["username"] != "admin" || $_GET ["password"] != "admin")
        {
            echo "用户名或密码输入不正确。";
        }
    }
        ?>
</body>

</html>