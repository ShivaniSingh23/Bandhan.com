<?php

$email=$_POST['email'];
//echo $email;
$name=$_POST['name'];
//echo $name;
$dob=$_POST['dob'];
//echo $dob;
$password=$_POST['password'];
//echo $password;

$mobile=$_POST['mobile'];
//echo $mobile;
$nationality=$_POST['nationality'];
$city=$_POST['city'];
//echo $city;
$religion=$_POST['religion'];
//echo $religion;
$mothertongue=$_POST['mothertongue'];
//echo $mothertongue;
$height=$_POST['height'];
$weight=$_POST['weight'];
$address=$_POST['address'];
$gender=$_POST['a'];
$filename=$_FILES['file']['name'];
$tmp=$_FILES['file']['tmp_name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
//echo $address;
$location="upload/";
move_uploaded_file($tmp,$location.$filename);
include("connection.php");
$sql="insert into reg(email,name,dob,password,mobile,nationality,city,religion,mothertongue,height,weight,address,gender,file) values('$email','$name','$dob','$password','$mobile','$nationality','$city','$religion','$mothertongue','$height','$weight','$address','$gender','$filename')";
mysql_query($sql);
header("location:register.php");


?>