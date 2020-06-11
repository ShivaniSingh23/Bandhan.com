
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
.sections1
{
min-height:450px;
}
.sections11
{color:black;font-size:25px;margin-top:4%;font-family:calibri;font-weight:bold;
text-align:center;}
.sections12
{color:gray;font-size:14px;margin-top:.5%;margin-bottom:2%;font-family:calibri;
font-weight:bold;text-align:center;}

</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">

<!--menu start-->
<?php include('menu.php');?>
<!--menu End-->
<!--header-->
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Contact Us</div>
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
<div class="col-sm-12 sections1">
<div class="col-sm-12 sections11"> <span  style="color:green">Contact </span> Us
</div>
<div class="col-sm-12 sections12">

</div>
<div class="col-sm-12 sections13">
<form action="contactcode.php" method="POST">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-5">
<div class="col-sm-12">
<input  type="text" name="name" class="form-control"  required placeholder="Enter Your Name"/><br>
</div> 
<div class="col-sm-12">
<input  type="email" name="email" class="form-control" required placeholder="Enter Your Email"/><br>
</div> 
<div class="col-sm-12">
<input class="form-control"  name="mobile" type="number" required placeholder="Enter Your Mobile Number"/><br>
</div>
<div class="col-sm-12">
<input class="form-control"  name="message" required type="textarea" placeholder="Enter Your Message"/><br>
		</div>
<div class="col-sm-12"><center>
<input value="SUBMIT" type="submit" /><br>
</center>
		</div>
		</form>
</div>
<div class="col-sm-5">
<center>
<div class="col-sm-12" style="font-size:15px;color:grey;margin-left:150px;">
<center><b>Address</b></center>Vidhya Niketan Colony,Foundary Nagar,Agra-6.
</div>
<div class="col-sm-12" style="font-size:15px;color:grey;margin-left:150px;">
<b>Email</b><br>www.bandhan.com
</div>
<div class="col-sm-12" style="font-size:15px;color:grey;margin-left:150px;">
<b>Mobile</b><br>9634683998,8791191423
</div>
</div>
</div>
<div class="col-sm-1"></div>
</center>
</div>

</div>
<!--section1 End-->
<div class="col-sm-12" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3547.841910978875!2d78.038752915211!3d27.22411278299451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39747a0a95555555%3A0x603f1fae6dbc482c!2sFoundry+Nagar+Agra!5e0!3m2!1sen!2sin!4v1532973392289"  frameborder="0" style="border:0" width="100%" height="300px"></iframe>

</div>
<!--footer start-->
<?php include('ooter.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>