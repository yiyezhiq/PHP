<?php
//session��Ȩ
session_start();
//�������ݿ�
include("conn/conn.php");
//$_SESSION['user']=$_POST['user'];  //��¼�ɹ����ȡuser
$user=$_POST['user'];     //��ȡuser
$pwd=$_POST['pwd'];       //��ȡpwd
$_SESSION['user']=$user;  //����session
if($user!=null and $pwd!=null)
{
 //��ѯ��䣺��ѯ�Ƿ��û������ڣ���������򵯳�����Ի��򣬷����¼�ɹ������������������Ȩ/2
$select=mysql_query("select * from tb_login where user='$user' and pwd='$pwd'");
if(mysql_numrows($select)==1)
	{
	echo "<script>alert('��¼�ɹ�');window.location.href='index_ok.php';</script>";

	}else
		echo "<script>alert('�û������������');window.location.href='enter.php';</script>";


}else
echo "<script>alert('�������û���������');window.location.href='enter.php';</script>";



/*$query=mysql_query("update tb_login set user=$user,"."pwd='$pwd'");
if($query)
  echo "���ݿ���³ɹ�";
  else
  echo "���ݿ����ʧ��";  */

?>