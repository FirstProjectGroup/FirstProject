<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<style type="text/css">
#apDiv1 {
	left: 364px;
	top: 30px;
	width: 184px;
	height: 67px;
	z-index: 1;
	border: 0px;
    text-align: center;
    margin:auto;
}
#apDiv2 {
	position: absolute;
	left: 16px;
	top: 117px;
	width: 189px;
	height: 439px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 62px;
	top: 168px;
	width: 449px;
	height: 47px;
	z-index: 2;
}
#apDiv4 {
	position: absolute;
	left: 611px;
	top: 165px;
	width: 79px;
	height: 75px;
	z-index: 3;
}

</style>
</head>

<body>
<div id="apDiv1">
  <h1><strong> 首页</strong></h1>
</div>
<div id="apDiv3" >
    <form  method="POST">
	<input type = "text" name = "searchcontent" id = "searchcontent" placeholder = "Enter the information" >
    <input type = "submit" id = "search" value="Search">
    </form>
    <form method = "post" id = "alluser">
    <input type = "submit" name = "alluser" id = "alluser" value="Display All User">
    </form>
    
    
    <form method = "post" id = "readd" action = "adduser.php">
    <input type = "submit" name = "readd" id = "readd" value="add user">
    </form>
    </div>
    
<div id="apDiv5">
    <?php
    error_reporting(0);
    if ($_POST["searchcontent"] != null){
        
        require "searchpage.php";
    }
    else if ($_POST["searchcontent"] == null and isset($_POST["searchcontent"])){
        echo "please tell us what you are searching for.";
    }
    if (isset($_POST["alluser"])){
        require "alluser.php";
    }
    ?>
    </div>
    
<p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>
