<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改商品库存</title>


<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>
<body>
<?php
session_start();
include("../deal/update_show.php");
?>
<table width="554" height="339" border="0" cellpadding="0" cellspacing="0" background="images/plsjgx.jpg" align="center">
  <tr>
    <td width="45" height="78">&nbsp;</td>
    <td width="453">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr>
    <td height="241">&nbsp;</td>
    <td align="left" valign="top"><form name="form1" method="post" action="../deal/aa_update_deal.php"><table width="452" height="50" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40" height="25" align="center" class="STYLE1">选项</td>
        <td width="64" align="center"><span class="STYLE1">商品名称</span></td>
        <td width="60" align="center"><span class="STYLE1">单价</span></td>
        <td width="64" align="center"><span class="STYLE1">数量</span></td>
        <td width="75" align="center"><span class="STYLE1">入货时间</span></td>
        <td width="87" align="center"><span class="STYLE1"></span></td>
        <td width="46" align="center"><span class="STYLE1"></span></td>
      </tr>

	   <?php
			if($result_show==true){
			  	while($myrow_show=mysql_fetch_array($result_show)){
	   ?>
      <tr>
        <td height="25" align="center"><input name="<?php echo $myrow_show[id];?>" type="checkbox" value="<?php echo $myrow_show[id];?>"></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow_show[name];?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow_show[price];?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow_show[quantity];?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow_show[date];?></span></td>
      </tr>
	  <?php
	  			}
			}
	   ?>
      <tr bordercolorlight="#FFFFFF">
        <td colspan="2" width="70" align="center" class="STYLE1">新库存</td>
        <td colspan="3" width="224">
          <label for="textfield"></label>
          <input type="text" name="newprice" id="newprice" />
    </td>
        <td colspan="2" width="98"><input type="submit" name="Submit" id="button" value="增加库存" /></td>
    </tr>
    
    </table></form> </td>
    <td>&nbsp;</td>
  </tr>
    
  <tr>
    <td height="69">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>