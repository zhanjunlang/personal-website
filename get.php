<?php
$conn=mysqli_connect("bdm297464103.my3w.com","bdm297464103","001018199526","bdm297464103_db");
if(!$conn){
	die(mysqli_error($conn));
} 
else{
	echo "aaa";
}
$sql="SELECT * FROM film_review";
$retval = mysqli_query( $conn, $sql );
	if(!$retval)
	{
		die(mysqli_error($conn));
	}
while($row=mysqli_fetch_array($retval,MYSQL_ASSOC)){
		echo "<tr>".
				"<td>{$row['name']}</td>".
				"<td>{$row['type']}</td>".
				"<td>{$row['review']}</td>".
				"<td>{$row['link']}</td>".
				"<td>{$row['time']}</td>".
				"<td>{$row['pic']}</td>".
			"</tr>";
	}
 ?>