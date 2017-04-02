<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <div class="wrapper" id="">
      
    <?php
        require("AddCustomers.php");
    ?>
        
    <form class="form-signin" id="myForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">       
      <h2 class="form-signin-heading">Register Customer</h2>
      <p>First Name:</p>
      <input type="text" class="form-control" placeholder="Enter first name" id="firstName" name="firstName" required="" autofocus="" />
      <p>Last Name:</p>
      <input type="text" class="form-control" placeholder="Enter last name" id="lastName" name="lastName" required="" autofocus="" />
      
        <br/>
      <input type="submit" id="Login" class="btn btn-lg btn-primary btn-block" />
      <input type="reset" class="btn btn-lg btn-primary btn-block"/>
      <input type="button" class="btn btn-lg btn-primary btn-block" value="Home" 
    onclick="window.location='admin.php';"/>
    </form>
  </div>
  
  
</body>
</html>
