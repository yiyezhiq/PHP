<?php
include("conn/conn.php");

$user=$_POST['user'];     //��ȡuser
$password=$_POST['password'];       //��ȡpwd
$enpassword=$_POST['enpassword']; 

if($user!=null and $password!=null)
{
$select=mysql_query("select * from news_users where user='$user'");
if(mysql_numrows($select)==0)
	{
		$insert=mysql_query("insert into news_users(user,password)
		values('$user','$password')");
	echo "<script>alert('��ϲ�㣡ע��ɹ���');window.location.href='login.php';</script>";

	}else
		echo "<script>alert('�û����Ѵ��ڣ�����������');window.location.href='creat.php';</script>";
}else
echo "<script>alert('����д������Ϣ');window.location.href='creat.php';</script>";
?>
 </body>
</html>