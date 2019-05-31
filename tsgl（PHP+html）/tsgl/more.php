<?php
//session授权
session_start();
error_reporting(0); //不显示错误提示
include("conn/conn.php");
$talk=$_GET['talk'];
$query="select * from tb_book where talk='$talk'";
$result=mysql_query($query);
$user=$_SESSION['user'];
          if($user!=null){
             $href="insert.php";
	         $href1="update.php";
			 $href2="index_ok.php";
          }else{
             $href="please_enter.php";
	         $href1="please_enter.php";
			 $href2="index.php";
          }
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>图书管理系统</title>
 <link href="css/more.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  <div class="body">
     <div class="head">
        <div class="login">
             <a href="login.php">注册  </a>&nbsp
             <a href="enter.php">登录</a>
        </div>
        
	 </div>
     <div class="nav">
             <a href="<?php echo $href2;?>">首页</a>
             <a href="<?php echo $href;?>">图书信息添加</a>
             <a href="<?php echo $href1;?>">图书信息管理</a>
          
     </div>
     <div class="connect">
         <div class="connect-head">
             <p>图书搜索:</p>
			 <form action="select.php" method="post" name="form2">
             <div class="select">
                 <select id='st' name='st'>
                     <option value=请选择 selected>请选择</option>
                     <option value=范例类>范例类</option>
                     <option value=典型应用类>典型应用类</option>
                     <option value=基础类>基础类</option>
                     <option value=项目类>项目类</option>
                     <option value=实例类>实例类</option>
                 </select>
             </div>
             <div class="select2">
                 <select id='talk1' name='talk1'>
                     <option value=请选择 selected>请选择</option>
                     <option value=PHP>PHP</option>
                     <option value=JAVA >JAVA</option>
                     <option value=.net>.net</option>
                     <option value=VB>VB</option>
                     <option value=C/C++>C/C++</option>
					 <option value=其它>其它</option>
                 </select>
             </div>
			
             <div class="button">
                  <input type="image" name="image" src="images/book_05_02.gif">
             </div>
			  </form>
         </div>
         <div class="connect-main">
		     <!--排序输出更多<<PHP类的信息-->
		     <?php
			 echo "<table width='600px' align='center'>";
              echo"<th align='center' width='400px'>书名</th><th align='center' width='200px'>上传日期</th>";
                while($row=mysql_fetch_array($result))
                {
					$books=$row['books'];  //输出books
					$id=$row['id'];
					$date=$row['date'];        //输出id
                  echo"<tr height='30'>";
				  echo"<td height='30' align='left'><a href='define.php?id=$id'>$books</a></td><td align='center'>$date</td>"; 
				  echo"</tr>";
                 }
				 echo" </table>";
			 ?>
         </div>
     </div>
	 <div class="foot">

	 </div>
     
  </div>
 </body>
</html>
