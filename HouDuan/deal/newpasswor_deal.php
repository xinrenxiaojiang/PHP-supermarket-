<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body><?php
if(isset($_POST["submit"]))
$c=$_POST["newpassword"];

include("conn.php");
$query1="UPDATE admin SET password=$c   ";
$query2="select id from shop where name='$c' ";
$conndb=new con("localhost","root","12345678","jw");
$conn=$conndb->getcon();
$result=mysql_query($query1,$conn);
        
			if($result==true){
	echo "<script>alert('密码修改成功!!');window.location.href='../guanli1.php';</script>";
	}		
?>
</body>
</html>