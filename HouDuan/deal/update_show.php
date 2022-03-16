<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改商品价格</title>
</head>

<body>
<?php
  include("conn.php");
  $conndb=new con("localhost","root","12345678","jw");
  $conndb->getcon();
  $query_show="select id,name,price,quantity,date from fruit";
  $result_show=mysql_query($query_show);
?>
</body>
</html>