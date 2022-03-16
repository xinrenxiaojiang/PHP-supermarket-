<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.qq {
	font-size: 36px;
	color: #936;
}
</style>
</head>

<body>
<div>
<div  ><p  class="qq" align="center" ><b>购物车</b></p></div>
<form   action="dingdan.php" method="post" >
<table align="center"  border="1">
  <tr>
    <td width="84" align="center">商品</td>
    <td width="69" align="center">价格</td>
    <td width="70" align="center">数量</td>
    <td width="168" align="center">手机号码</td>
    <td width="168" align="center">地址</td>
  </tr>
  <tr>
    <td   width="84" height="35" align="center"><?php session_start(); foreach($_POST["radio"] as $aa)echo $aa."<br>";
	$_SESSION[user]=$aa;
	?></td>
    <td align="center"><?php session_start();
if(isset($_POST["submit"])||($_POST['submit'])=="加入购物车")
$c=$_POST["search"];
$d=$_POST["radio"];
$b=$_SESSION[user];
include("conn.php");
$query1="select price from beverages where  name='$b' ";
$query2="select id from shop where name='$c' ";
$conndb=new con("localhost","root","12345678","jw");
$conn=$conndb->getcon();
$result=mysql_query($query1,$conn);
       while($j1=mysql_fetch_array($result))
		{
			echo$j1['price']."<br>";
			
			}
			?></td>
    <td><input type="text" name="qqq" size="10" ></td>
    <td><input type="text" name="numeber"></td>
    <td><input type="text" name="address"></td>
  </tr>
  <tr bordercolorlight="#FF0000"><td height="39" align="center" colspan="5">    <input      type="submit" name="submit" value="提交订单">
  </td>
  </tr>
</table>
 
</form>
</div>

</body>
</html>