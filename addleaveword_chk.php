<?php 
session_start();
$name=$_SESSION['name'];
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");

$userid=$_SESSION['name'];
$createtime=date("Y-m-d H:i:s");
$title=$_POST['title'];
$content=$_POST['content'];

$sql="insert into tb_leaveword values('','$userid','$createtime','$title','$content');";

$rs=mysql_query($sql);

if($rs){
  echo "发表成功";
}

else{
  echo "发表失败";
}
?>