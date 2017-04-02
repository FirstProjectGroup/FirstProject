<<<<<<< HEAD
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
=======
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="page1.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="apDiv1">
  <p><a href="#">广告推送</a></p>
  <p><a href="#">查看客服信息</a></p>
  <p><a href="#">查看技术员信息</a></p>
  <p><a href="#">增加新客户信息</a></p>
  <p><a href="#">搜索客户信息</a></p>
  <p><a href="#">显示全部客户信息</a></p>
  <p><a href="#">查看总共进账</a></p>
  <p><a href="#">查看总共材料费用</a></p>
  <p><a href="#">仓库库存减少</a></p>
</div>
<div id="apDiv2">
  <h1><strong>暖通空调管理系统</strong></h1>
</div>

<div id="apDiv3">
	
  <table width="744" height="574" border="1">
    <caption>
      管理员信息
    </caption>
    <tr>
      <td>id</td>
      <td>账号</td>
      <td>密码</td>
    </tr>
    <tr>
      <td><?php 
            $servername = "localhost";
            $username = "root";
            $password = "";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "SELECT id, username, password FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
                }
            } 
          $conn->close(); 
          
          ?></td>
      <td>asd</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
>>>>>>> origin/yunkai
