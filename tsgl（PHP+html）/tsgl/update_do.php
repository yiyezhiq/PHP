<?php
include("conn/conn.php");
$O_id=$_GET['id'];
$books=$_POST['books'];
$synopsis=$_POST['synopsis'];
$catalog=$_POST['catalog'];
$bookpath=$_POST['bookpath'];
$programpath=$_POST['programpath'];
$videopath=$_POST['videopath'];

//ִ��SQL���
$query=mysql_query("update tb_book set books='$books',"
."synopsis='$synopsis',catalog='$catalog',bookpath='$bookpath',programpath='$programpath',videopath='$videopath' where id=$O_id");
if($query){
			  echo "<script>alert('�޸ĳɹ�');window.location.href='update.php';</script>";
}else 
		  echo "����ʧ�ܣ�����Ϊ��".mysql_error()."<br>";
           

//����SQLִ����䷵�ص�bool�ͱ����ж��Ƿ����ɹ�

?>