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
  <title>图书管理系统</title>
 <link href="css/update.css" type="text/css" rel="stylesheet">
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
				   <?php
                   include("conn/conn.php");
                   $pagesize=5;
                   $query=@mysql_query("select * from tb_book");
                  ?>
			<div class="page">

				   <?php
                  //输出总记录
                           echo"共".mysql_numrows($query)."条记录&nbsp&nbsp";
              
                  //输出总页数
						 $sum=mysql_numrows($query);
						 $total=ceil($sum/$pagesize);
						 echo"共"."$total"."页&nbsp&nbsp";
						 //获得页码
						if(isset($_GET['page']))
						   $p=(int)($_GET['page']);
					   else
						 $p=1; 
						//输出当前页
							 echo"当前第".$p."页";
				  ?>
             </div>
             <div class="page1">
				<?php
                if($p>1)
              {
                 $prev=$p-1;
                echo "<a href=update.php?page=$prev>上一页   </a>";
                /* echo "<a href='?page=$prev'> 上一页  </a>";*/
              }
                //当前页不是最后一页时，输出下一页的链接
              if($p<$total)
              {
                 $next=$p+1;
                echo "<a href=update.php?page=$next>下一页   </a>";
                /* echo "<a href='?page=$next'> 下一页  </a>";*/
              }
			 ?>
             </div>
				 <?php
    
        
    
                 $start=$pagesize*($p-1);  //$start:从第几页开始查询
                 $query=@mysql_query("select * from tb_book limit $start,$pagesize") or die("SQL语句执行失败！");
                  echo "<table width='600px' align='center'>";
                  echo" <th width='500px'>书名</th><th width='100px' align='center'> 操作</th>";
    
                     //遍历查询books的每一条记录并输出
                     while($row=mysql_fetch_array($query))
                    {
                        $books=$row['books'];  //输出books
                        $id=$row['id'];        //输出id
                      echo"<tr height='30'>";
                      echo"<td align='left'><a href='#'>$books</a></td><td align='center'><a href='update_ok.php?id=$id'>修改</a><a href='delete.php?id=$id'>/删除</a></td>"; 
                      echo"</tr>";
                     }
                 echo" </table>";?>
    
    
    <!--当前页不是第一页时，输出上一页的链接-->

	      
		 
       </div>
     </div>
     <div class="foot">
     
     </div>
  </div>
 </body>
</html>
