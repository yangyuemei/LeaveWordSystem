<?php 
//2016-5-10 am
//将文本中的字符转换为HTML标识符
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
include_once("conn/conn.php");

if(isset($_POST['reg'])){
  $username=$_POST['username'];
  $userpwd=$_POST['userpwd'];
  $realname=$_POST['realname'];
  $email=$_POST['email'];
  $QQ=$_POST['QQ'];
  $tel=$_POST['tel'];
  $ip=$_SERVER["REMOTE_ADDR"];
  $address=$_POST['address'];
  $face=$_POST['face'];
  $regtime=date("Y-m-d H:i:s");
  $sex=$_POST['sex'];
  $usertype="0";
  
  $sql="insert into tb_user values('',' $username','$userpwd','$realname',' $email','$QQ','$tel','$ip','$address',' $face',' $regtime','$sex','$usertype')";
  
  $rs=mysql_query($sql);
  if($rs){
    echo "注册成功";
  }
  else{
    echo "注册失败";
  }
}

?>
