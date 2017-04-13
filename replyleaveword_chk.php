<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");

$id=$_POST['id'];
$userid=$_POST['userid'];
$createtime=date("Y-m-d H:i:s");
$title=$_POST['title'];
$replycontent=$_POST['replycontent'];
$reply="1";

$sql="insert into tb_replyword values('','$userid','$createtime','$title','$replycontent','$reply')";

$rs=mysql_query($sql);

if($rs){
   echo "回复成功";
}
else{
  echo "回复失败";
}

?>