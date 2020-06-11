
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
.section
{
	
	min-height:300px;
	color:white;
}
</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">

<!--header-->
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1150px;">Login</div>
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
<div class="col-sm-12 section">
<div class="row">
<div class="col-sm-12 s0">
<div class="col-sm-10"></div>
<div class="col-sm-2" style="color:grey;font-size:18px;">
Login<span class="fa fa-lock"></span>
</div>
</div>
<div class="col-sm-12 s1"style="color:#eb2e4a;"><h1></h1></div><br>
<div class="col-sm-12 s2" >
<div class="col-sm-12" style="margin:15px 0px 15px 0px;">




<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="col-sm-12" >

<form action="logincode.php" method="POST">
<div class="col-sm-12" style="color:#eb2e4a;">
<h3>Login Here</h3>
</div>

<div class="col-sm-12" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="email" type="email" placeholder="Enter Your Email"/>
		</div>
	
</div>
<div class="col-sm-12" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="password" type="password" placeholder="Enter Your Password"/>
		</div>
	
</div>
<div class="col-sm-12" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12"><center>
			<input type="submit" value="LOGIN"/></center>
		</div>
	
</div>


</div></form>
<div class="col-sm-3"></div>
</div>
</div>
</div>
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