<table border="1" cellpadding="0" cellspacing="0">
<tr><th>ID</th><th>用户ID</th><th>发表时间</th><th>留言主题</th><th>留言内容</th><th>操作</th></tr>
<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");


$userid=$_SESSION['name'];

$sql="select * from tb_leaveword where order by createtime  limiti 3";
$rs=mysql_query($sql);

while($rst=mysql_fetch_object($rs)){
?>
<tr><td><?php echo $rst->id;?></td>
<td><?php echo $rst->userid;?></td>
<td><?php echo $rst->createtime;?></td>
<td><?php echo $rst->title;?></td>
<td><?php echo $rst->content;?></td>


<td>
</td>


<td><a href="editleaveword.php?id=<?php echo $rst->id;?>">编辑 |</a>
<a href="replyleaveword.php?id=<?php echo $rst->id;?>">回复 </a>
</td>
</tr>

<?php
}
?>
</table>