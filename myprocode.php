<?php
session_start();
echo "Welcome to dashboard";
$email=$_SESSION['user'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$nationality=$_POST['nationality'];
$city=$_POST['city'];
$religion=$_POST['religion'];
$mothertongue=$_POST['mothertongue'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$address=$_POST['address'];
echo $name."<br/>".$dob."<br/>".$mobile."<br/>".$nationality."<br/>".$city."<br/>".$religion."<br/>".$mothertongue."<br/>".$height."<br/>".$weight."<br/>".$address."<br/>";
include('connection.php');
echo $update="update reg set name='$name',dob='$dob',mobile='$mobile',nationality='$nationality',city='$city',religion='$religion',mothertongue='$mothertongue',height='$height',weight='$weight',address='$address' where email='$email'";
mysql_query($update);
header("location:myprofile.php");


?>