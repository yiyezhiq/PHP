<?php
include("conn/conn.php");
$books=$_POST['books'];
$date=$_POST['date'];
$sort=$_POST['sort'];
$talk=$_POST['talk'];
$synopsis=$_POST['synopsis'];
$catalog=$_POST['catalog'];
$bookpath=$_POST['bookpath'];
$programpath=$_POST['programpath'];
$videopath=$_POST['videopath'];

//执行mysql语句
$query=mysql_query("select * from tb_book");
$insert=mysql_query("insert into tb_book(books,date,sort,talk,synopsis,catalog,bookpath,programpath,videopath) values('$books','$date','$sort','$talk','$synopsis','$catalog','$bookpath','$programpath','$videopath')");
if($insert)
   echo "<script>alert('图书信息添加成功');window.location.href='update.php';</script>";
else
   echo "<script>alert('图书信息添加失败');window.location.href='insert.php';</script>";
   mysql_close();

?>