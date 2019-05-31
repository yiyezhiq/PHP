<?php
//session授权
session_start();
error_reporting(0);
$query=@mysql_query("select * from tb_book ");
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
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>图书信息添加</title>
 <link href="css/insert.css" rel="stylesheet" type="text/css">
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
           <div class="nav-left">
             <a href="<?php echo $href2;?>">首页</a>
             <a href="<?php echo $href;?>">图书信息添加</a>
             <a href="<?php echo $href1;?>">图书信息管理</a>
          
          </div>
          <div class="nav-right">
            <p>欢迎您：<?php echo $_SESSION['user']; ?><a href="exit.php">退出</a></p>
         
         
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
		    <form method="post" name="form1" action="insert_ok.php">
		     <table width="600px" height="350px">
                 <tr height="30px"><td width="130px" align="right">书名： </td><td width="500px"><input type="text" name="books" id="books" size="30" value=""></td></tr>
                 <tr><td align="right">上传日期：</td><td><input type="text" name="date" size="30" value=""></td></tr>
                 <tr><td align="right">类别：</td><td><select name="sort" id="sort">
                     <option value=范例类>范例类</option>
                     <option value=典型应用类>典型应用类</option>
                     <option value=基础类>基础类</option>
                     <option value=项目类>项目类</option>
                     <option value=实例类>实例类</option>
                 </select></td></tr>
                 <tr><td align="right">语言：</td><td>
				   <select name="talk" id="talk">
                     <option value=PHP>PHP</option>
                     <option value=JAVA >JAVA</option>
                     <option value=.net>.net</option>
                     <option value=VB>VB</option>
                     <option value=C/C++>C/C++</option>
					 <option value=其它>其它</option>
                   </select>
				 </td></tr>
                 <tr><td align="right">文稿存储位置：</td><td><input type="text" name="bookpath" size="30" value=""></td></tr>
                 <tr><td align="right">程序存储位置：</td><td><input type="text" name="programpath" size="30" value=""></td></tr>
                 <tr><td align="right">录像存储位置：</td><td><input type="text" name="videopath" size="30" value=""></td></tr>
                 <tr><td align="right">简介：</td><td><textarea cols="30" rows="3" name="synopsis" value=""></textarea></td></tr>
                 <tr><td align="right">目录：</td><td><textarea cols="30" rows="3" name="catalog" value=""></textarea></td></tr>
				 <tr><td colspan="2" align="center"><input type="submit" type="Submit" value="提交">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				 <input type="reset" name="Reset" value="重置"></td></tr>
             </table>
			</form>
         </div>
     </div>
	 <div class="foot">

	 </div>
     
  </div>
 </body>
</html>
