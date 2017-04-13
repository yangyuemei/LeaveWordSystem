<?php 
//2016-5-10 am
//将文本中的字符转换为HTML标识符
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

function unhtml(){
	//转换文本中的特殊字符
	$content=htmlspecialchars($content);
	
	//替换文本中的换行符
	$content=str_replace("@","","$content");
	
	//删除文本中首尾的空格
	return trim($content);
}

function msubstr($str,$start,$len){
    //存储字符串的总长度
    $strlen=$start+$len;
	
	//声明一个变量并赋值为空
	$tmpstr="";
	for($i=0;$i<$strlen;$i++){
	   //如果字符串的首个字节>0xa0，则表示汉字
	   if(ord(substr($str,$i,1))>0xa0){
	      //每次取出两个字符赋给变量$tmpstr，即等于一个汉字
	      $tmpstr.=substr($str,$i,2);
		  $i++;
	   }
	   else{
	       //如果不是汉字，每次取出一个字符赋给变量$tmpstr
	       $tmpstr.=substr($str,$i,1);
	   }
	}
	return $tmpstr;
}

?>