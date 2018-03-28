<?php
	$filmName="月刊少女野崎君";
	$filmType="动漫";
	$filmReview="全程欢笑高能，所有角色都塑造得很有特色，令人舒服。也许是因为一直在笑太累了，有时感觉笑了好久一看进度条才过了一半，这番真有毒。";
	$filmLink="https://movie.douban.com/subject/25850705/";
	$conn=mysqli_connect("bdm297464103.my3w.com","bdm297464103","001018199526","bdm297464103_db");
	if(! $conn )
	{
	  die('连接错误: ' . mysqli_error($conn));
	}
	echo '连接成功<br />';
	$sql="INSERT INTO film_review VALUES".
	"(".
	"'".
	$filmName.
	"',".
	"'".
	$filmType.
	"',".
	"'".
	$filmReview.
	"',".
	"'".
	$filmLink.
	"'".
	")";
	echo $sql;
	$retval = mysqli_query( $conn, $sql );
	if(!$retval)
	{
		die(mysqli_error($conn));
	}
	echo "影评插入成功";
?>