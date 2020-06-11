
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
margin-top:50px;text-align:center;color:gray;
}
.fcontent
{
text-align:center;
font-family:calibri;

font-weight:bold;
}
.section
{
	background:white;
	min-height:500px;
	color:white;
}

</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">

<!--menu start-->
<?php include('menu.php');?>
<!--menu End-->
<!--header-->
<div class="col-sm-12 text-right" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;">Registration</div>
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
<form action="registercode.php" method="POST" enctype="multipart/form-data">
<div class="col-sm-12 s1"><center><b style="color:grey;font-size:35px;"><u >Register Here for <b style="color:#ed5671;font-size:35px;"> your Life Partner...</b></u></center></div><br>
<div class="col-sm-12 s2" style="font-size:15px;color:grey;text-align:center;">

	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="email" type="email" required placeholder="Enter Your Email"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input  type="text" name="name" class="form-control" required placeholder="Enter Your Name"/>
		</div>
	</div>
	
	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="dob" type="date" required placeholder="Enter Your DOB"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="password"  required type="password" placeholder="Enter Your password"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="mobile" required type="number" placeholder="Enter Your Mobile Number"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
		
		<select class="form-control" name="nationality" >
			<option >Nationality</option>
			<option >Indian</option>
			<option >Usa</option>
			<option >African</option>
			<option >British</option>
			

			</select>
		</div>
	</div>
	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
		
		<select class="form-control" name="city" >
			<option >Select City</option>
			<option >Agra</option>
			<option >Delhi</option>
			<option >Mathura</option>
			<option >Lucknow</option>
			<option>Banaras</option>
			<option >Kanpur</option>

			</select>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
		
		<select class="form-control" name="religion"  >
			<option >Select Religion</option>
			<option >Hindu</option>
			<option >Jain</option>
			<option >Muslim</option>
			<option >Sikh</option>
			<option >Parsi</option>
			<option>Jewish</option>
			<option >Buddhist</option>
			<option >No religion</option>
			<option >Buddhist</option>
			<option >Other</option>

			</select>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
		
		<select class="form-control" name="mothertongue" >
			<option >Select Mother Tongue</option>
			<option >Arrabic</option>
			<option >Assamese</option>
			<option >Awadhi</option>
			<option >Bangali</option>
			<option >Bhojpuri</option>
			<option >Chattisgari</option>
			<option >Coorgi</option>
			<option >Dorgi</option>
			<option >English</option>
			<option >French</option>
			<option >Garhwali</option>
			<option >Gujrati</option>
			<option >Harayanvi</option>
			<option >Himachali</option>
			<option >Hindi</option>
			<option >Jewish</option>
			<option >Kannada</option>

			</select>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="height" required type="number" placeholder="Enter Your Height"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="weight" required type="number" placeholder="Enter Your Weight"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="address" required type="text-area" placeholder="Enter Your Address"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12" >Gender  :
			<input  type="radio" value="Male" name="a" />Male
			<input  type="radio" value="Female" name="a" />Female
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
<input type="file" name="file" />
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input  type="submit" value="SUBMIT"/>
		</div>
	</div>
	
</div>
</div>
</form>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('ooter.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>