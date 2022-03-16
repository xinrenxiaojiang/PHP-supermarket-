<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>批量数据更新</title>
</head>

<body>
<?php
  /*session_start();
 
*/
  include("conn.php");
  $conndb=new con("localhost","root","12345678","jw");
  $conndb->getcon();
  $newPrice=$_POST['newprice'];
  $loop=-1;

  if(isset($_POST['Submit'])||$_POST['Submit']=="新鲜水果"){
	  echo "<script> window.location.href='../pages/a.php';</script>";
  }else  if(isset($_POST['Submit1'])||$_POST['Submit1']=="时令蔬菜"){
	  echo "<script> window.location.href='../pages/b.php';</script>";
  }else  if(isset($_POST['Submit2'])||$_POST['Submit2']=="烟酒专区"){
	  echo "<script> window.location.href='../pages/c.php';</script>";
  }else if(isset($_POST['Submit3'])||$_POST['Submit3']=="饮料专区"){
	  echo "<script> window.location.href='../pages/d.php';</script>";
  }else if(isset($_POST['Submit4'])||$_POST['Submit4']=="运动专区"){
	  echo "<script> window.location.href='../pages/e.php';</script>";
  }

	
?>

</body>
</html>