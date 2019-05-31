<?php
//session授权
session_start();
//注销登录
    unset($_SESSION['user']);
	unset($_SESSION['pwd']);
	echo "<script>alert('退出成功');window.location.href='index.php';</script>";

?>