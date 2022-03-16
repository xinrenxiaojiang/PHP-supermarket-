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
  include("conn.php");
  $conndb=new con("localhost","root","12345678","jw");
  $conndb->getcon();
  $newPrice=$_POST['newprice'];
  $loop=-1;

  if(isset($_POST['Submit'])||$_POST['Submit']=="批量修改"){
	while(list($name,$value)=each($_POST)){
	  if($name=="newprice"||$name=="Submit"){
		  break;
	  }
	  if($name!="newprice"&&$name!="Submit"){
		if(is_numeric($newPrice)){
		  $result=mysql_query("update toba set price='".$newPrice."' where      id='".$value."'"); 
		  if($result==true){
			$loop=1; 
		  }else{
			$loop=0;
		  }
		}else{
			$loop=0;
		}
	  }
	}
  }
  if($loop==-1){
	 echo "<script>alert('请选择要修改的商品!'); window.location.href='../pages/c.php';</script>"; 
  }else if($loop==0){
	 echo "<script>alert('批量修改失败!'); window.location.href='../pages/c.php';</script>";
  }else{
	 echo "<script>alert('批量修改成功!'); window.location.href='../pages/c.php';</script>"; 
  }
	
?>

</body>
</html>