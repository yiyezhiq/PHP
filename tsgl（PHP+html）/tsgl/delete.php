<?php
include("conn/conn.php");
$id=$_GET['id'];
$query=mysql_query("delete from tb_book where id=$id");
if($query)
   echo "<script>alert('ɾ���ɹ�');window.location.href='update.php';</script>";
else
  echo "ɾ��ʧ��";
?>