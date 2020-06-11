<?php
session_start();
echo "Welcome to dashboard";
echo $_SESSION['user'];
?>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<style>

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
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:899px;">Change Password</div>
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
<div class="col-sm-12" >
<div class="col-sm-6">
<div class="col-sm-12"  style="margin-top:5%;">
<div class="row">

<form action="changecode.php" method="POST">
<input type="password" class="form-control" placeholder="enter old password" name="ppassword"/> <br/>
<input type="password" placeholder="enter old password" class="form-control" name="newpassword"/><br/> 
<input type="password"   placeholder="enter old password" class="form-control"name="confirmpassword"/><br/> 
<center><input type="submit" value="submit"/> </center>
</form>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:5%;">
<img src="images/college4.jpg" style="min-height:150px;width:300px;"/>
</div>
<div class="col-sm-1"></div>
</div>
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