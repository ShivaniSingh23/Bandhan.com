
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
<div class="col-sm-12 text-right" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;">Request From Me</div>
<!--header End-->
<div class="col-sm-12">
<?php
session_start();
$email=$_SESSION['user'];
include('connection.php');
$sql="select * from reg where email!='$email'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="col-sm-3">
	<div class="col-sm-12" style="min-height:250px;border:1px solid #eb2e4a;margin-top:10px;">
	<img src="upload/<?php echo $row['file'];?>" width="100%" height="230px" style="margin-top:15px;margin-bottom:15px;"/>
	</div>
	<div class="col-sm-12" style="min-height:50px;background:#eb2e4a;margin-bottom:10px;color:white;text-align:center;font-size:25px;">
	<p><?php echo $row['name'];?><br/>
	<a href="sendrequest.php?id=<?php echo $row['id'];?>" style="font-size:12px;color:grey;border:1px solid white;padding:1%;background:white;">Send Request</a></p>
	</div>
</div>
<?php
}
?>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('ooter.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>