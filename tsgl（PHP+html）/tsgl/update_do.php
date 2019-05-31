<?php
include("conn/conn.php");
$O_id=$_GET['id'];
$books=$_POST['books'];
$synopsis=$_POST['synopsis'];
$catalog=$_POST['catalog'];
$bookpath=$_POST['bookpath'];
$programpath=$_POST['programpath'];
$videopath=$_POST['videopath'];

//执行SQL语句
$query=mysql_query("update tb_book set books='$books',"
."synopsis='$synopsis',catalog='$catalog',bookpath='$bookpath',programpath='$programpath',videopath='$videopath' where id=$O_id");
if($query){
			  echo "<script>alert('修改成功');window.location.href='update.php';</script>";
}else 
		  echo "更新失败，错误为：".mysql_error()."<br>";
           

//根据SQL执行语句返回的bool型变量判断是否插入成功

?>