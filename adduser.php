<<<<<<< HEAD
<html>
    <head>
        <title>Add User Info</title>
        
        <body>
            
            
            <form action = "adduseraction.php" method = "post">
                
                User's name:</br>
                <input type = "text" name = "userinfon" id = "userinfon"></br>
                User's password:</br>
                <input type = "text" name = "userinfop" id = "userinfop"></br>
                <input type = "submit" name = "add" value = "add" id = "add"></br>
                <?php

                    
                    session_start();
                    echo $_SESSION['UIFRS']."</br>";
                    echo "current id: ". $_SESSION['id'];
                ?>
            </form> 
        </body> 
    </head>
    
=======
<html>
    <head>
        <title>Add User Info</title>
        
        <body>
            <form action = "adduseraction.php" method = "post">
                User's name:</br>
                <input type = "text" name = "userinfon" id = "userinfon"></br>
                User's password:</br>
                <input type = "text" name = "userinfop" id = "userinfop">
                <input type = "submit" name = "add" value = "add" id = "add">
            
            </form> 
        </body> 
    </head>
    
>>>>>>> origin/yunkai
</html>