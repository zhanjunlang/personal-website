<?php
$conn=mysqli_connect("bdm297464103.my3w.com","bdm297464103","001018199526","bdm297464103_db");
if(!$conn){
	die(mysqli_error($conn));
} 
else{
	echo "连接成功";
}
$sql="";
$retval = mysqli_query( $conn, $sql );
	if(!$retval)
	{
		die(mysqli_error($conn));
	}
 ?>