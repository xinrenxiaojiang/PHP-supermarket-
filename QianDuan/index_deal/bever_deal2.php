<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

if(isset($_POST["sousuo"]))
$c=$_POST["search"];
$d=$_POST["radio1"];
include("conn.php");
$query1="select name from fruit where  name='$c' ";
$query2="select price from beverages where name='$c' ";
$conndb=new con("localhost","root","12345678","jw");
$conn=$conndb->getcon();
$result=mysql_query($query,$conn);
       
		{
			/*echo$j1['price']."";*/
			
			}

/*if($j1==true){
	echo"1";
$result=mysql_query($query2,$conn);
 $j2=mysql_fetch_array($result);
if($j2==true){
	echo"".$j2;
	}
}*/
?>


<div  ><p  class="qq" align="center" ><b>购物车</b></p></div>
<form  action="dingdan.php" method="post">
<table align="center" width="594" border="1">
  <tr>
    <td width="82" align="center">商品名称
    </td>
    <td width="72" align="center">单价</td>
    <td width="70" align="center">数量</td>
    <td width="168" align="center">手机号码</td>
    <td width="168" align="center">地址</td>
  </tr>
  <tr>
<td align="center"><?php echo$c."";?></td>
    <td align="center"><?php

$result=mysql_query($query2,$conn);
if($result==true){
       while($j1=mysql_fetch_array($result))
		{
			echo$j1['price']."<br>";
		}
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
</body>
</html>