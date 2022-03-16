<?php
session_start();
include("conn.php");
if(isset($_POST['submit'])||$_POST['$submit']=="提交"){
	$user=$_POST['user_name'];
	$pass=$_POST['password'];
	$shenfen=$_POST['shenfen'];
	$_SESSION['userName']=$_POST['user_name'];
	$sql_1="select * from user where name='$user'";
	$sql_2="select * from user where name='$user' and password='$pass'";
	$sql_3="select * from admin where username='$user' ";
	$sql_4="select * from admin where username='$user' and password='$pass'";
	if($user==""){
	        echo "<script> alert('用户名不能为空！'); history.back();</script>";
	}else if($pass==""){
        echo "<script> alert('密码不能为空！'); history.back();</script>";
	}else{
		if($shenfen=="顾客"){
				
		
	        $conndb=new con("localhost","root","12345678","jw");
	        $conn=$conndb->getcon();
	        $result=mysql_query($sql_1,$conn);
	        $judgment1=mysql_fetch_array($result);
	        if($judgment1!=true){
		echo "<script> alert('用户名不存在，请注册！');window.location.href='../pages/zhuce.php';</script>";
	        }else{
		$result=mysql_query($sql_2,$conn);
		$judgment2=mysql_fetch_array($result);
		if($judgment2!=true){
		        echo "<script> alert('密码输入错误!'); history.back();</script>";
		}else{
			echo"<script> window.location.href='../index.php';</script>";
					        
  
		}	
	        }
			}else if($shenfen=="管理员"){
				 $conndb=new con("localhost","root","12345678","jw");
	       		 $conn=$conndb->getcon();
				$result=mysql_query($sql_4,$conn);
		$judgment4=mysql_fetch_array($result);
		if($judgment4!=true){
		        echo "<script> alert('登录名或密码输入错误!'); history.back();</script>";
		}else{
			echo "<script> window.location.href='../../HouDuan/guanli1.php';</script>";
			}
				}
	}
}
?>