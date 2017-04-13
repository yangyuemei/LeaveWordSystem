<form method="post" action="login_chk.php">
<div align="center">
  <table width="326" height="200" border="1" cellpadding="0" cellspacing="0">
    <caption>
      用户登录
    </caption>
    <tr>
      <td><div align="right">用户名</div></td>
      <td width="79">
        <input type="text" name="name" id="name"/>      </td>
      <td width="18"><span name="name_chk"></span></td>
    </tr>
    <tr>
      <td><div align="right">密码</div></td>
      <td width="79">
        <input type="text" name="pwd" id="pwd"/>      </td>
      <td><span name="password_chk"></span></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="login" value="登录" />
      </div></td>
      <td colspan="2"><div align="center">
	  <input type="reset" name="reset" value="重置" /></div></td>
    </tr>
  </table>
</div>
</form>