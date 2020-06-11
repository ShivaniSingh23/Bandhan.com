
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
.d_icon
{
	min-height:300px;
	margin-top:2%;
	
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
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Dashboard</div>
<!--header End-->

<!--section1 start-->
<div class="col-sm-12 d_icon">
<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">

<div class="col-sm-12">
<div class="row">

<div class="col-sm-4">
<div class="col-sm-12">
<a href="dashboard.php"><span class="fa fa-th" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:15px;"></span></a>
</div>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="col-sm-12">
<a href="requestforme.php"><span class="fa fa-users" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:7px;"></span></a>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12">
<a href="requestfromme.php"><span class="fa fa-search-plus" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;margin-top:30px;padding-left:10px;"></span></a>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12" style="margin-bottom:10%">
<a href="acceptedrequest.php"><span class="fa fa-check-square" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:20px;"></span></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12"style="margin-top:5%;">
<a href="myprofile.php"><span class="fa fa-user" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;margin-top:30px;padding-left:15px;"></span></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12"style="margin-top:5%;">
<a href="changepassword.php"><span class="fa fa-exchange " style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:10px;"></span></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12"style="margin-top:5%;margin-left:360px;">
<a href="logout.php"><span class="fa fa-unlock-alt" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:40px;"></span></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('ooter.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>