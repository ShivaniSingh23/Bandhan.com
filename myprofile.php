<?php
session_start();
echo "Welcome to dashboard";
$email=$_SESSION['user'];
?>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<style>
.form-control
{
	background:;
border:none;
border:1px solid grey;margin-top:5%;
border-radius:none;
}
.h_bgimage
{
	min-height:600px;
	background:url('images/login-bg4.jpg');
	background-size:cover;
	background-repeat:no-repeat;
}
.h_hrgba
{min-height:250px;background:white;}
.h_content
{text-align:center;font-size:25px;color:white;margin-bottom:1%;margin-top:8%;text-shadow:1px 1px 1px black;}
.section1
{
min-height:200px;background:#eeeeee;
}
.faicons
{
font-size:100px;margin-top:50px;text-align:center;color:gray;
}
.fcontent
{
text-align:center;
font-family:calibri;
font-size:20px;
font-weight:bold;
}

</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">

<!--menu start-->
<?php include('dashboardmenu.php');?>
<!--menu End-->
<!--header-->
<div class="col-sm-12 text-right"  style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;">My Profile</div>
<!--header End-->
<!--section1-->
<div class="col-sm-12 section1">

<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-4">
<div class="col-sm-12 faicons"><img src="images/desktop (2).png" height="80"></div>
<div class="col-sm-12 fcontent">Lakhs of Genuine Members</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12 faicons"><img src="images/users.png" height="80"></div>
<div class="col-sm-12 fcontent">Verification by Visit</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12 faicons"><img src="images/lock.png" height="80"></div>
<div class="col-sm-12 fcontent">100% Privacy</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
<!--section1 end-->
<!--section1 start-->
<?php 
include('connection.php');
$select="select * from reg where email='$email'";
$res=mysql_query($select);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
}
?>
<div class="row">
<div class="col-sm-12 my_mid">
<div class="col-sm-1"></div>
<form action="myprocode.php" method="POST" enctype="multipart/form-data">
<div class="col-sm-10">
<div class="col-sm-12 my_rgba10">
<div class="h2 text-center"><span style="color:white"><u>My Profile</u></span> </div>
<div class="col-sm-6"><input type="name" name="name" value="<?php echo$row['name'];?>" placeholder="Enter your name.." class="form-control"/></div>
<div class="col-sm-6"><input type="date" name="dob" placeholder="Enter your dob.." class="form-control" value="<?php echo$row['dob'];?>" /></div>
<div class="col-sm-6"><input type="number" name="mobile" placeholder="Enter your mobile no.." class="form-control" value="<?php echo$row['mobile'];?>"/></div>
<div class="col-sm-6"><input type="text" name="nationality" class="form-control" value="<?php echo$row['nationality'];?>"/>
		</div>
	
	
<div class="col-sm-6"><input type="text" name="city" class="form-control" value="<?php echo$row['city'];?>"/>
		</div>
<div class="col-sm-6"><input type="text" name="religion" class="form-control" value="<?php echo$row['religion'];?>"/>
		</div>
		<div class="col-sm-6"><input type="text" name="mothertongue" class="form-control" value="<?php echo$row['mothertongue'];?>"/>
		</div>
		<div class="col-sm-6"><input type="text" name="height" class="form-control" value="<?php echo$row['height'];?>"/>
		</div>
		<div class="col-sm-6"><input type="text" name="weight" class="form-control" value="<?php echo$row['weight'];?>"/></div>
		<div class="col-sm-6"><input type="text" name="address" class="form-control" value="<?php echo$row['address'];?>"/></div>
<div class="col-sm-6">
<div class="col-sm-12">
<div class="col-sm-4"></div>
<center><div class="col-sm-4">
<input type="submit"value="SUBMIT" class="form-control" style="background:grey;margin-top:10%;color:white;margin-bottom:20px;"/>
</div></center>
<div class="col-sm-4"></div>
</div>
</div>
</div>
</div>
</form>
<div class="col-sm-1"></div>
</div>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('ooter.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>