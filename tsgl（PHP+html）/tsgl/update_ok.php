<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
include("conn/conn.php");
mysql_query("set names 'utf8'");
//session授权
session_start();
error_reporting(0);
$user=$_SESSION['user'];
          if($user!=null){
             $href="insert.php";
	         $href1="update.php";
			 $href2="index_ok.php";
          }else{
             $href="please_enter.php";
	         $href1="please_enter.php";
			 $href2="index_ok.php";
          }

//将记录显示
$id=$_GET['id'];
$query="select * from tb_book where id='$id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
                	
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
 <link href="css/update_ok.css" type="text/css" rel="stylesheet">
 </head>

 <body>
  <div class="body">
     <div class="head">
        <div class="login">
             <a href="login.php">注册  </a>&nbsp;
             <a href="enter.php">登录</a>
        </div>
        
	 </div>
     <div class="nav">
         <div class="nav-left">
             <a href="<?php echo $href2;?>">首页</a>
             <a href="<?php echo $href;?>">图书信息添加</a>
             <a href="<?php echo $href1;?>">图书信息管理</a>
          
         </div>
         <div class="nav-right">
            <p>欢迎您：<?php echo $_SESSION['user']; ?> <a href="exit.php">退出</a></p>
         
         
         </div>
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
		    
			<form id="form1" name="form1" method="post" action="update_do.php?id=<?php echo $id ?>">
			
              <table width="600px" height="300px" align="center">
                  <tr>
             <td width="150">书名：  </td>
			 <td width="400"><input name="books" type="text" id="books" value="<?php
			 echo $row['books'];
			 ?>"></td>
		  </tr>
          <tr>
             <td >类别：  </td>
			 <td >
			 <select id='sort1'>
                     <option value='<?php echo $row['sort']?>' ><?php echo $row['sort']?></option>
					 <option value='范例类'>PHP</option>
                     <option value='范例类'>范例类</option>
                     <option value='典型应用类'>典型应用类</option>
                     <option value='基础类'>基础类</option>
                     <option value='项目类'>项目类</option>
                     <option value='实例类'>实例类</option>
                 </select></td>
		  </tr>
          <tr>
             <td >语言：  </td>
			 <td >
			 <select id='talk1'>      <!--定义id为talk以实现搜索功能   -->
                     <option value='<?php echo $row['talk']?>'><?php echo $row['talk']?></option>
					 <option value=PHP>PHP</option>
                     <option value=JAVA >JAVA</option>
                     <option value=.net>.net</option>
                     <option value=VB>VB</option>
                     <option value=C/C++>C/C++</option>
					 <option value=其它>其它</option>
                 </select></td>
		  </tr>
          <tr>
             <td >简介：  </td>
			 <td ><input name="synopsis" type="text" id="synopsis" size="40" value="<?php
			 echo $row['synopsis']
			 ?>"></td>
		  </tr>
		  <tr>
             <td >目录：  </td>
			 <td >  
			 <textarea name="catalog" rows=2 cols=31 value=""> <?php
			 echo $row['catalog']
			 ?>

</textarea></td>
		  </tr>
		  <tr>
             <td >文稿路径：  </td>
			 <td ><input name="bookpath" type="text" id="bookpath" size="40" value="<?php
			 echo $row['bookpath']
			 ?>">  </td>
		  </tr>
		  <tr>
             <td >程序路径：  </td>
			 <td ><input name="programpath" type="text" id="programpath" size="40" value="<?php
			 echo $row['programpath']
			 ?>  "></td>
		  </tr>
		  <tr>
             <td >录像路径：  </td>
			 <td ><input name="videopath" type="text" id="videopath" size="40" value="<?php
			 echo $row['videopath']
			 ?> "> </td>
		  </tr>
		    <tr>
			   <td colspan="2" align="center"><button type="submit" values="提交" >提交</button>&nbsp&nbsp&nbsp&nbsp<button type="exit" values="取消">取消</button></td>
			</tr>
              </table>
			  </form>
			  <?php 
		  ?>
       </div>
     </div>
     <div class="foot">
     
     </div>
  </div>
 </body>
</html>



