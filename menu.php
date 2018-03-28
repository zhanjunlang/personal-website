<?php
// 设置 cookie 过期时间为过去 1 小时
setcookie("username", $_POST['username'], time()-3600);
?>