<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
</head>
<style type="text/css">
.body{
	background:url(../images/1.jpg);
	background-repeat:no-repeat;
	height:600px;
	width:900px;
	margin:auto;
	margin-top:200px;
	margin-left:580px;
	}
.a{
	height:400px;
	width:400px;
	margin:0 auto;
	margin-left:140px;
	
	
	}
	.button {
    background-color:#96BFE4 ;
    border: none;
    color: white;
    padding: 8px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 8px;
}	
</style>
<body>
<div class="body">

<div class="a">
<form   action="../index_deal/zhuce_deal.php" method="post">
<table width="400" border="0">
<tr>
    <td height="116" colspan="2" align="center"><font color="#FFFFFF" face="华文隶书" size="+6">用户注册</font>
      </td>
    </tr>
  <tr>
    <td width="114"  align="center" height="32"><font color="#FFFFFF" face="华文新魏">用户名：</font></td>
    <td width="276"><input type="text" name="user_name" size="20"/></td>
  </tr>
  <tr>
    <td height="40" align="center"><font color="#FFFFFF" face="华文新魏">登录密码：</font></td>
    <td><input  type="password" name="password1" size="20"  /></td>
  </tr>
  <tr>
    <td height="30" align="center"><font color="#FFFFFF" face="华文新魏">性别：</font></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" value="男" name="sex"  />
      <font color="#0033FF"> 男</font>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" value="女" name="sex"  />
      <font color="#FF00CC"> 女</font></td>
  </tr>
 
  <tr>
    <td align="center"><font color="#FFFFFF" face="华文新魏">备注：</font></td>
    <td><textarea rows="6" name="remark" cols="" style="width:201px; height:20px;"></textarea></td>
  </tr>
  <tr>
    <td align="center" colspan="2">
<input type="submit" value='提交' name="submit" class="button"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				<input type="reset" value="重置" name="B2" class="button"  />

</td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>