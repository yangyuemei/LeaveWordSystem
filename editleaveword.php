<form action="editleaveword_chk.php?id=<?php echo $rst->id;?>" method="post">
<table border="1" cellpadding="0" cellspacing="0" align="center">

<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");


$id=$_GET['id'];

$sql="select * from tb_leaveword where id='$id'";
$rs=mysql_query($sql);

while($rst=mysql_fetch_object($rs)){
?>
<tr><td>ID</td>
<td><div align="center">
  <input type="text" name="id" value="<?php echo $rst->id;?>"/>
</div></td></tr>
<tr><td>用户ID</td>
<td><div align="center">
  <input type="text" name="userid" value="<?php echo $rst->userid;?>"/>
</div></td></tr>

<tr><td>发表时间</td>
<td><div align="center">
  <input type="text" name="createtime" value="<?php echo $rst->createtime;?>"/>
</div></td></tr>

<tr><td>留言主题</td>
<td><div align="center">
  <input type="text" name="title" value="<?php echo $rst->title;?>"/>
</div></td></tr>

<tr><td>留言内容</td>
  <td>    <div align="center">
    <input type="text" name="content" value="<?php echo $rst->content;?>"/>  
  </div></td>
</tr>

<?php
}
?>
<tr><td><div align="center">
    <input type="submit" name="edit" value="修改"/>  
  </div></td>
  <td><div align="center">
    <input type="reset" name="reset" value="重置"/>  
  </div></td>
  </tr>
</table>
</form>