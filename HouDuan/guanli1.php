<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>超市管理系统</title>
<link href="css/guanli.css" rel="stylesheet" type="text/css" />
</head>
<style>body{background-color:#C8E0E8;}</style> 
<style type="text/css">a {text-decoration: none;color:#FFFFFF}
a:hover{ color:#F9D6FA}</style>
 
 
<body>
<div  class="background">
  <div class="logo" style="text-align:center;line-align:100px;"><p id="rcorners2"><font size="+3" color="#FFFFFF" style="font-family:华文隶书">超市管理系统</font></p></div>
  <div class="daohang"><table width="450" border="0"> 
  <tr>
    <td align="center" valign="middle" ><p id="rcorners5"><font size="+2" color="#FFFFFF" style="font-family:华文隶书">管理员设置</font></p></td>
  </tr>
  <tr>
    <td align="center" valign="middle" ><a href="pages/newpassword.php"><p id="rcorners5"><font size="+2" color="#FFFFFF" style="font-family:华文隶书">修改密码</font></p></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle" ><p id="rcorners5"><font size="+2" color="#FFFFFF" style="font-family:华文隶书">商品库存信息</font></p></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><form action="pages/chaxunkucun_deal.php" method="post"> <input type="submit" name="submit" value="查询库存" class="button"></form></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><form  action="pages/zengjiakucun_deal.php" method="post"> <input type="submit" name="submit1" value="增加库存" class="button"></form></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><form action="pages/shanchukucun_deal.php" method="post"> <input type="submit" name="submit2" value="删除库存" class="button"></form></td>
  </tr>
</table></div>

</div>
</body>
</html>