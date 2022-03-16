<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改商品价格</title>
</head>

<body>
<?php
  /*session_start();
 
*/
  include("../deal/conn.php");
  $conndb=new con("localhost","root","12345678","jw");
  $conndb->getcon();
  $newPrice=$_POST['newprice'];
  $loop=-1;

  if(isset($_POST['submit'])||$_POST['submit']=="查询库存"){
	  echo "<script> window.location.href='bbb.php';</script>";
	
  }
	
?>

</body>
</html>