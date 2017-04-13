<?php 
session_start();
$name=$_SESSION['name'];

?>

<script type="text/javascript">
function del() {
	if (!confirm("确认要注销登录吗？")) {
		window.event.returnValue = false;
	}
}
</script>
<div align="center" width="90%" height="90%">
  <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td height="60" colspan="2">
      <a href='index.php' >首页 |</a> 
      <a href='register.php' target="content">用户注册 |</a> 
      <a href='addleaveword.php' target="content">发表留言 |</a>
      <a href='lookleaveword.php' target="content">查看留言 |</a>
      <a href='searchleaveword.php' target="content">查询留言 |</a>     
       <a href='register.php' target="content">版主管理 |</a> 
      <a href='logout.php' onclick="del()">注销登录</a>
      </td>
    </tr>
    <tr>
      <td height="31" colspan="2"><?php echo "欢迎用户".$name."登录";?></td>
    </tr>
    <tr>
      <td width="330" height="156"></td>
      <td width="709" rowspan="3"><iframe name="content" frameborder="0" style="width:100%; height:100%;">
	  </iframe></td>
    </tr>
    <tr>
      <td height="157"><?php include("calendar.php");
	  $calendar=new Calendar;
 $calendar->out();
	  ?></td>
    </tr>
    <tr>
      <td height="313">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</div>
