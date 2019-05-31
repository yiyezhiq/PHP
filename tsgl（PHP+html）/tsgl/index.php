<?php
//session授权
session_start();
error_reporting(0);
//链接数据库
include("conn/conn.php");
$query=@mysql_query("select * from tb_book");
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

//遍历查询books的每一条记录并输出
while($row=mysql_fetch_array($query))
{
	$books=$row["books"];  //输出books
	$id=$row['id'];
}
$query1="select * from tb_program";
$result=mysql_query($query1);
//

?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>图书详细信息</title>
 <link href="css/index.css" rel="stylesheet" type="text/css">
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
		    
              <div class="php"> 
                  <p> 
                      <a href="more.php?talk=php"><?php echo mysql_result($result,0,'talk');?></a>
                  </p>
                  <div class="php1">
                      
				      <?php
					      //查询tb_book表中talk为PHP的记录，并逐行输出前2行
                            $select="select * from tb_book where talk='php' limit 2";  
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=$talk '>更多<<</a>" ?>
                  </div>
              </div>
              <div class="c">
                  <p> 
                      <a href="more.php?talk=java "><?php echo mysql_result($result,1,'talk');?></a>
                  </p>
                  <div class="php1">
                      <?php
                            $select="select * from tb_book where talk='java' limit 2";
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=java '>更多<<</a>" ?>
                  </div>
              
              </div>
              <div class="net">
                  <p> 
                      <a href="more.php?talk=c"><?php echo mysql_result($result,2,'talk');?></a>
                  </p>
                  <div class="php1">
                      <?php
                            $select="select * from tb_book where talk='c' limit 2";
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=c '>更多<<</a>" ?>
                  </div>
              </div>
              <div class="JAVA">
                  <p> 
                      <a href="more.php?talk=java"><?php echo mysql_result($result,3,'talk');?></a>
                  </p>
                  <div class="php1">
                      <?php
                            $select="select * from tb_book where talk='vb' limit 2";
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=java '>更多<<</a>" ?>
                  </div>
              </div>
              <div class="VB">
                  <p> 
                      <a href="more.php?talk=.net"><?php echo mysql_result($result,4,'talk');?></a>
                  </p>
                  <div class="php1">
                      <?php
                            $select="select * from tb_book where talk='.net' limit 2";
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=.net '>更多<<</a>" ?>
                  </div>
              </div>
              <div class="other">
                  <p> 
                      <a href="more.php?talk=其他"><?php echo mysql_result($result,5,'talk');?></a>
                  </p>
                  <div class="php1">
                      <?php
                            $select="select * from tb_book where talk='其他' limit 2";
                            $array1=mysql_query($select);
                           while($row=mysql_fetch_array($array1))
                          {
					        $books=$row['books'];  //输出books
							$id=$row['id'];
							$talk=$row['talk'];
							echo "<a href='define.php?id=$id'>".$books;
							echo "</a><br>";
                           }
			          ?>
                  </div>
                  <div class="more">
                      <?php echo "<a href='more.php?talk=其他 '>更多<<</a>" ?>
                  </div>
              </div>
			   
         
         </div>
     </div>
     <div class="foot">
     
     </div>
  </div>
 </body>
</html>
