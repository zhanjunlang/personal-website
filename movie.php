<!DOCTYPE html>
<html lang="en">
<head>
    <title>生活</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/echarts.min.js"></script>
    <script src="js/vintage.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="css/style.css" />
</head>
<style>
* {
    font-family: "Microsoft YaHei";
}

div#header h2 {
    text-align: center;
}

div#navi ul li a {
    font-family: "Microsoft YaHei";
    font-size: 15px;
    color: black;
    padding: 5px 12px 5px 12px;
    text-decoration: none;
}

div#navi ul li a:hover {
    color: rgb(185, 176, 180);
}
</style>
<body>
    <div id="header">
        <h2 style=";"><img src="pictures/icon.png" style="height: 30px;padding-bottom: 5px;padding-right: 10px"><a href="zhan.html" style="text-decoration: none;color:rgba(66, 52, 58, 0.28);font-family:'Microsoft YaHei';">Long Mr.Zhan的个人空间</a></h2>
    </div>
    <div id="navi" class="container">
        <ul class="nav nav-tabs nav-justified">
            <li><a href="project.html">项目</a></li>
            <li><a href="note.html">技术笔记</a></li>
            <li><a href="game.html">游戏评测</a></li>
            <li><a href="movie.html">电影</a></li>
            <li><a href="life.php">生活</a></li>
            <li><a href="download.html">资源</a></li>
        </ul>
    </div>
	<?php 
	$conn=mysqli_connect("bdm297464103.my3w.com","bdm297464103","001018199526","bdm297464103_db");
	if(!$conn){
		die(mysqli_error($conn));
	} 
	$sql="SELECT * FROM film_review";
	$retval = mysqli_query( $conn, $sql );
		if(!$retval)
		{
			die(mysqli_error($conn));
		}
	while($row=mysqli_fetch_array($retval,MYSQL_ASSOC)){
		echo '<div class="panel panel-success animation" style="height: 180px">
		            <div class="panel-heading">
		                <h3 class="panel-title">'."{$row['name']}".'</h3>
		            </div>
		            <div class="panel-body">
		                <img src="pictures/masaki.jpg" alt="月刊少女野崎君" style="height: 100px;float: left;margin-right: 20px">
		                <div style="float: left;">
		                    <p style="width: 700px;height: 65px;">
		                        '."{$row['review']}".' 
		                    </p>
		                    豆瓣链接：<a href="https://movie.douban.com/subject/25850705/">https://movie.douban.com/subject/25850705/</a>
		                    <p>发表于2017/08/03</p>
		                </div>
		            </div>
		        </div>';
		}
	 ?>
</body>
</html>





