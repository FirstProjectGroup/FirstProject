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
