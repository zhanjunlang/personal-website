<?php 
header("Content-type: text/html; charset=utf-8"); 
$file=fopen("comment.csv", "a");
$comment = array($_POST["id"],$_POST["nickname"],$_POST["comment"]);
fputcsv($file, $comment);
fclose($file);
 ?>