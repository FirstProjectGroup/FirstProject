<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<<<<<<< HEAD
  <title>Bootstrap Snippet: Login Form</title>
=======
  <title>Login</title>
>>>>>>> origin/yunkai
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

<<<<<<< HEAD
      <link rel="stylesheet" href="css/style.css">
=======
  <link rel="stylesheet" href="css/style.css">
>>>>>>> origin/yunkai

  
</head>

<body>
    <div class="wrapper" id="loginPage">
    <?php
        require('Login.php');
    ?>
    <form class="form-signin" id="myForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Enter your username" id="username" name="username" required="" autofocus="" />
        
      <input type="password" class="form-control" name="password" placeholder="Password" id="pwd" name="pwd" required=""/>      
        <span class="error">* <?php echo "<font color=\"red\"> $Err  </font>";?></span><br/>
      
      <input type="submit" id="Login" class="btn btn-lg btn-primary btn-block" />
      <input type="reset" class="btn btn-lg btn-primary btn-block"/>
    </form>
  </div>
  
  
</body>
</html>
