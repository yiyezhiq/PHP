<?php
//session��Ȩ
session_start();
//ע����¼
    unset($_SESSION['user']);
	unset($_SESSION['pwd']);
	echo "<script>alert('�˳��ɹ�');window.location.href='index.php';</script>";

?>