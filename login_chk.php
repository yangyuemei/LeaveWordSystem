<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");


	$username=$_POST['username'];//获取输入的用户名
	
	$userpwd=$_POST['userpwd'];
	
	$sql="select * from tb_user where username='".trim($username)."' and userpwd='".$userpwd."'";
	//$rs=mysql_fetch_array(mysql_query($sql));
	$rs=mysql_query($sql);
	if($rs){
	 $_SESSION['name']=$username;
	   echo "<script>alert('登录成功');window.location.href='index.php';</script>";
	  //echo "登陆成功";
	   
	  

	}
	else{
	   echo "登录失败";
	}


?>