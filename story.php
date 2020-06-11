<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

<link href="css/hover.css" rel="stylesheet" />
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script>
$(document).ready(function(){
$("img").click(function(){
$("#fu").trigger("click");
});
$("#fu").change(function(){
var fullPath=$(this).val();
var name=fullPath.substring(fullPath.lastIndexOf("//")+1);
$("#sp").html("<b>"+name+"</b>");
var extension=fullPath.substring(
fullPath.lastIndexOf(".")+1);
if(extension=="jpg"||extension=="png"||extension="jpeg")
{
$("#sp1").html("valid image");

});
});
</script>
<script>
//WAP in JS make slider with trasparant color and change text.
var img=["s2.jpg"];
imgno=0;
function slider()
{
var dv=document.getElementById("outer");
var dvin=document.getElementById("upcolor");
dv.style.backgroundImage="url('image/"+img[imgno]+"')";
dvin.style.background="upcolor[imgno]";
dvin.innerText=text[imgno];
imgno++;
if(imgno==img.length)
{
imgno=0;
}
window.setTimeout("slider()",3000);
}
</script>
<style>
#top
{
	min-height:500px;
	background:transparent;
}
#menu
{
	
	background:transparent;
	border:none;
	box-shadow:none;
	margin-right:10px;
	font-size:15px;
}
#outer
{
min-height:500px;
box-shadow:none;
background-image:url('image/s2.jpg');
background-size:cover;
background-repeat:no repeat;
}
#upcolor
{
min-height:500px;
background:rgba(0,0,0,.3);
font-size:40px;
color:blue;
padding-top:10px;
}
.section
{
	background:gray;
	min-height:500px;
	color:white;
}

#foot
{
	background:black;
	min-height:500px;
	color:white;
}

</style>	
</head>
<body onload="slider()">
<div id="top">
<div class="col-sm-12 menu" style="background:red;">
<div class="col-sm-3 logo"><img src="image/logo1.png" style="height:50px; padding-left:80px;"/></div>
<div class="col-sm-9 menu">
<div class="navbar navbar-default" id="menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-home" ></span>HOME</a></li>
        <li class="hvr-sweep-to-right"><a href="gallery.php"><span class="fa fa-picture-o"></span>Gallery</a></li>
        <li><a href="#"><span class="fa fa-user"></span>THE COUPLE</a></li>
        <li><a href="#"><span class="fa fa-heart"></span>LOVESTORY</a></li>
        <li><a href="#"><span class="fa fa-calendar"></span>EVENT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-gift"></span>BLESS THEM</a></li>
        <li><a href="#"><span class="fa fa-envelope"></span>RSVP</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" area-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <l8ui><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</div>
</div>
<!------menu------->
<!------slider----->
<center>
<div id="outer">
<div id="upcolor" style="color:#eb2e4a;background-image:url('image/s2.pnp');"></div>
</div>
</center><br><br>
<!------slider----->
<!------section--->
<div class="col-sm-12 section">
<div class="row">
<form action="storycode.php" method="POST" enctype="multipart/form-data">
<div class="col-sm-12 s1"><center><b style="color:grey;font-size:35px; background:lightblue;"><u >Add Success <b style="color:#ed5671;font-size:35px; ">Story</b></u></center></div><br>
<div class="col-sm-12 s2" style="font-size:15px;color:grey;text-align:center;">

	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="Sid" type="Sid" placeholder="Enter Your Sid"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin: 0px 15px 0px;">
		<div class="col-sm-12">
			<input  type="text" name="Cname" class="form-control" placeholder="Enter Your Cname"/>
		</div>
	</div>
	
	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="Mdate" type="Mdate" placeholder="Enter Your Mdate"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="MDec" type="MDec" placeholder="Enter Your MDec"/>
		</div>
	</div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control"  name="CPic" type="CPic" placeholder="Enter Your CPic"/>
		</div>
	</div>
	
	
		<div class="col-sm-4">
			<input class="form-control"  name="SDate" type="SDate" placeholder="Enter Your SDate"/>
		</div>
	</div>

	


	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="address" type="text-area" placeholder="Enter Your Address"/>
		</div>
	</div>
	
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
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
<div id="foot"><center>
</center>
</div>

</div>
<!------section--->
<!------footer---->

<!------footer---->
</div>

</body>
</html>