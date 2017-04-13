<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");

$id=$_POST['id'];
$title=$_POST['title'];
$content=$_POST['content'];

$sql="update tb_leaveword set title='$title',content='$content' where id='$id'";

$rs=mysql_query($sql);

if($rs){
   echo "修改成功";
}
else{
  echo "修改失败";
}

?>