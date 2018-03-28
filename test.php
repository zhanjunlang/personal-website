<?php
	if(isset($_POST)){
		setcookie("username", $_POST['username'], time()+3600);
	}
	
 ?>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php 
if (isset($_COOKIE["username"]))
    echo "欢迎 " . $_COOKIE["username"] . "!<br>";
else
    echo "普通访客!<br>";
?>
<form action="test.php" method="post" enctype="multipart/form-data">
    用户名<input type="text" name="username"><br>
    <input type="submit" name="submit" value="提交">
</form>


</body>
</html>