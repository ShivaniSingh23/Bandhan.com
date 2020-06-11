<?php
session_start();
//echo "welcome to dashboard";
$email= $_SESSION['user'];
echo $email;
$op=$_POST['ppassword'];
echo $op;
$np=$_POST['newpassword'];
echo $np;
$cp=$_POST['confirmpassword'];
echo $cp;
//database connectivity

include("connection.php");
$select="select * from reg where email='$email'";
$res=mysql_query($select);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ppassword=$row['password'];
	echo $ppassword;
	}
   if($ppassword==$op)
   {
	if($np==$cp)
	{
    echo $sql="update reg set password='$np' where email='$email'" ;
    mysql_query($sql);
	header("location:login.php");
	}
    else
    {
	header("location:changepassword.php?msg=3");
    }
}
else
{ 
	header("location:changepassword.php?msg=4");
}

?>