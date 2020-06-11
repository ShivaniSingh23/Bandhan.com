<?php
session_start();
$email=$_SESSION['user'];
include('connection.php');
$res=mysql_query("select id from reg where email='$email'");
$row=mysql_fetch_array($res,MYSQL_BOTH);
$reqby=$row['id'];
$reqto=$_REQUEST['id'];
//echo $id;
mysql_query("insert into request(reqby,reqto,reqdate) values('$reqby','$reqto',curdate())");
header("location:requestfromme.php");
?>