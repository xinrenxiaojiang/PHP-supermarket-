<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php session_start();
include("conn.php");
if(isset($_POST['submit'])||($_POST['submit'])=="提交订单")
$shuliang=$_POST['qqq'];
$b=$_SESSION["user"];


$q3=" select quantity from  where name='$b'";
$query1="update toba set quantity=100-$shuliang where name='$b' ";
$query2="select quantity from shangpin where name='$b' ";
$conndb=new con("localhost","root","12345678","jw");
$conn=$conndb->getcon();

$result=mysql_query($query1,$conn);

      if($result==true){
		  echo "<script>alert('订单提交成功');window.location.href='sx/index.php'; </script>";
		  }else{
			   echo"<script>alert('订单提交失败');window.location.href='sx/index.php'; </script>";}

?>
</body>
</html>