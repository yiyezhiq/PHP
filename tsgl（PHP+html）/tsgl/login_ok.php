
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php
include("conn/conn.php");

$user=$_POST['user'];     //获取user
$pwd=$_POST['pwd'];       //获取pwd
$section=$_POST['section'];
$name=$_POST['name'];

if($user!=null and $pwd!=null and $section!=null and $name!=null)
{
$select=mysql_query("select * from tb_login where user='$user'");
if(mysql_numrows($select)==0)
	{
		$insert=mysql_query("insert into tb_login(user,pwd,section,name)
		values('$user','$pwd','$section','$name')");
	echo "<script>alert('恭喜你！注册成功！');window.location.href='enter.php';</script>";

	}else
		echo "<script>alert('用户名已存在，请重新输入');window.location.href='login.php';</script>";
}else
echo "<script>alert('请填写完整信息');window.location.href='login.php';</script>";
?>
 </body>
</html>