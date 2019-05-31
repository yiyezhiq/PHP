<?php
//session授权
session_start();
//链接数据库
include("conn/conn.php");
//$_SESSION['user']=$_POST['user'];  //登录成功后获取user
$user=$_POST['user'];     //获取user
$pwd=$_POST['pwd'];       //获取pwd
$_SESSION['user']=$user;  //定义session
if($user!=null and $pwd!=null)
{
 //查询语句：查询是否用户名存在，如果存在则弹出出错对话框，否则登录成功，并且用下面语句授权/2
$select=mysql_query("select * from tb_login where user='$user' and pwd='$pwd'");
if(mysql_numrows($select)==1)
	{
	echo "<script>alert('登录成功');window.location.href='index_ok.php';</script>";

	}else
		echo "<script>alert('用户名和密码错误');window.location.href='enter.php';</script>";


}else
echo "<script>alert('请输入用户名和密码');window.location.href='enter.php';</script>";



/*$query=mysql_query("update tb_login set user=$user,"."pwd='$pwd'");
if($query)
  echo "数据库更新成功";
  else
  echo "数据库更新失败";  */

?>