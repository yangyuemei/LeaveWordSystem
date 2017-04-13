<?php 
//2016-5-10 am
//数据库连接文件

header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

$conn=mysql_connect("localhost","root","")  or die("数据库连接出错".mysql_error());;

$db_select=mysql_select_db("db_leaveword",$conn);

/*if($conn){
  echo "数据源选择成功<br>";
}

if($db_select){
  echo "数据库选择成功";
}*/
?>