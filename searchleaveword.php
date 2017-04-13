<form name="form1" method="post" action="">
  <div align="center">
    <table width="400" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="171">根据主题查询</td>
        <td width="175"><input type="text" name="title"/></td>
      <td width="46"><input type="submit" name="search" value="查询"/></td>
      </tr>
      </table>
  </div>
</form>

<table border="1" cellpadding="0" cellspacing="0">
<tr><th>ID</th><th>用户ID</th><th>发表时间</th><th>留言主题</th><th>留言内容</th></tr>

<?php 

header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");

$title=$_POST['title'];

$sql="select * from tb_leaveword where title='$title'";

$rs=mysql_query($sql);

while($rst=mysql_fetch_object($rs)){
?>
<tr><td><?php echo $rst->id;?></td>
<td><?php echo $rst->userid;?></td>
<td><?php echo $rst->createtime;?></td>
<td><?php echo $rst->title;?></td>
<td><?php echo $rst->content;?></td>
</tr>

<?php
}
?>
</table>
