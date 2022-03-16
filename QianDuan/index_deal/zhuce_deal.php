<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body><?php
include('conn.php');
if(isset($_POST['submit'])||($_POST['submit'])=="提交"){
	$user=$_POST['user_name'];
	$pass=$_POST['password1'];
	$sex=$_POST['sex'];
	$beizhu=$_POST['remark'];
	$query1="insert into user(name,password,sex,beizhu) values('$user','$pass','$sex','$beizhu') ";
$conndb=new con("localhost","root","12345678","jw");
$conn=$conndb->getcon();
$result=mysql_query($query1,$conn);
      if($result==true){
		  echo"<script>alert('注册成功');window.location.href='../pages/login1.php';</script>";
		  }
	
	}
?>
</body>
</html>