<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
include("connection.php");
$sql="select * from reg where email='$email' and password='$password'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$row['email'];
	header("location:dashboard.php");
}
else
{
	header("location:login.php?msg=1");
}


?>