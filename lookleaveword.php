<table border="1" cellpadding="0" cellspacing="0">
<tr><th>ID</th><th>用户ID</th><th>发表时间</th><th>留言主题</th><th>留言内容</th><th>回复信息</th><th>操作</th></tr>
<?php 
session_start();
$name=$_SESSION['name'];
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码

include_once("conn/conn.php");


$userid=$_SESSION['name'];

$sql="select * from tb_leaveword";
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
<strong><hr /></strong>
<table width="521" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25">id</td>
    <td width="106">留言用户id</td>
    <td width="95">回复时间</td>
    <td width="95">回复主题</td>
    <td width="95">回复内容</td>
    <td width="91">回复者id</td>
  </tr>
  
  <?php 
  
  $sql1="select * from tb_replyword";
$rs1=mysql_query($sql1);

while($rst1=mysql_fetch_object($rs1)){
  ?>
  <tr>
    <td><?php echo $rst1->id;?></td>
    <td><?php echo $rst1->userid;?></td>
    <td><?php echo $rst1->createtime;?></td>
    <td><?php echo $rst1->title;?></td>
    <td><?php echo $rst1->content;?></td>
    <td><?php echo $rst1->replyid;?></td>
  </tr>

<?php 
} 
?>
</table>
<hr />

  <?php 
  
  $sql2="select * from tb_user";
$rs2=mysql_query($sql2);


while($rst2=mysql_fetch_object($rs2)){
  ?>
<table width="1034" height="216" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="449" height="60">发布人的信息</td>
  </tr>
  <tr>
    <td><table width="452" height="167" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="186"><div align="right">主题</div></td>
        <td width="208"><?php echo $rst->title;?></td>
      </tr>
      <tr>
        <td><div align="right">发布人</div></td>
        <td><?php echo $rst2->username;?></td>
      </tr>
      <tr>
        <td><div align="right">发布人邮箱</div></td>
        <td><?php echo $rst2->email;?></td>
      </tr>
      <tr>
        <td><div align="right">发布人的IP地址</div></td>
        <td><?php echo $rst2->ip;?></td>
      </tr>
      <tr>
        <td><div align="right">发布人的QQ</div></td>
        <td><?php echo $rst2->QQ;?></td>
      </tr>
    </table></td>
   

  <?php 
} 
?>
</table>


