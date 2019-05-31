<?php
include("conn/conn.php");
$id=$_GET['id'];
$query=mysql_query("delete from tb_book where id=$id");
if($query)
   echo "<script>alert('É¾³ý³É¹¦');window.location.href='update.php';</script>";
else
  echo "É¾³ýÊ§°Ü";
?>