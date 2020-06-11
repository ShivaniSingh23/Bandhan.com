
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
.section3{background:#33485a;min-height:300px;margin-top:4%;}
.aboutbandhan
{
text-align:center;color:White;font-size:25px;text-shadow:1px 1px 1px black;margin-top:4%;
}
.aboutcontent
{
text-align:justify;color:white;margin-top:2%;font-family:calibri;
}

.section
{
	background:white;
	min-height:500px;
	color:white;
}



</style>	

<!------section--->
<div class="col-sm-12 section">
<div class="row">
<form action="registercode.php" method="POST" enctype="multipart/form-data">
<div class="col-sm-12 s1"><center><b style="color:grey;font-size:35px;"><u >Register Here for <b style="color:#ed5671;font-size:35px;"> your Life Partner...</b></u></center></div><br>
<div class="col-sm-12 s2" style="font-size:15px;color:grey;text-align:center;">

	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="email" type="email" placeholder="Enter Your Email"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input  type="text" name="name" class="form-control" placeholder="Enter Your Name"/>
		</div>
	</div>
	
	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="dob" type="date" placeholder="Enter Your DOB"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="password" type="password" placeholder="Enter Your password"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="mobile" type="number" placeholder="Enter Your Mobile Number"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
		
		<select class="form-control" name="nationality">
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
		
		<select class="form-control" name="city">
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
		
		<select class="form-control" name="religion">
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
		
		<select class="form-control" name="mothertongue">
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
			<input class="form-control" name="height" type="number" placeholder="Enter Your Height"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="weight" type="number" placeholder="Enter Your Weight"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="address" type="text-area" placeholder="Enter Your Address"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">Gender  :
			<input  type="radio" value="Male" name="a" />Male
			<input  type="radio" value="Female" name="a" />Female
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
<input type="file" name="file"/>
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