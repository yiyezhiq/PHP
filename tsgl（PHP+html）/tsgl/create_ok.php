<?php
include("conn/conn.php");

$user=$_POST['user'];     //获取user
$password=$_POST['password'];       //获取pwd
$enpassword=$_POST['enpassword']; 

if($user!=null and $password!=null)
{
$select=mysql_query("select * from news_users where user='$user'");
if(mysql_numrows($select)==0)
	{
		$insert=mysql_query("insert into news_users(user,password)
		values('$user','$password')");
	echo "<script>alert('恭喜你！注册成功！');window.location.href='login.php';</script>";

	}else
		echo "<script>alert('用户名已存在，请重新输入');window.location.href='creat.php';</script>";
}else
echo "<script>alert('请填写完整信息');window.location.href='creat.php';</script>";
?>
 </body>
</html>