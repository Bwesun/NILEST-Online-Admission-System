
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initialscale=
1.0">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script type="text/javascript" language="javascript" src="jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="bootstrap.min.js"></script>
	<style type="text/css">
		.col-md-2{
			border-right: 2px solid gray; 
		}
		h3{
			background-color: #ccccff;
			padding: 10px;
		}
		.navbar-brand{
			font-family: sans-serif;
			font-weight: bolder;
		}
		body{
			margin-top: 1%;
		}
		#list li a{
			color: white;
			font-weight: bold;
		}
		#list li a:hover{
			background-color: white ;
			color: blue;
		}
		.l-section-headline {
    width: calc(100% + 40px);
    margin: 20px 0 20px -20px;
        margin-left: -20px;
}
.c-section-headline {
    font-size: 16px;
    font-weight: 700;
    color: #02b290;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    text-align: center;
    -webkit-box-shadow: inset 0 -11px 0 -1px #fff,inset 0 -12px;
    box-shadow: inset 0 -11px 0 -1px #fff,inset 0 -12px;
}
.l-section-headline {
    width: 100%;
    margin-left: 0;
}
.c-section-headline__text {
    background-color: #fff;
    white-space: nowrap;
    padding: 0 40px;
        padding-top: 0px;
        padding-right: 40px;
        padding-bottom: 0px;
        padding-left: 40px;
}

	</style>
</head>
<body>
<div class="">

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<center><h2><font color="#66CC99"> NIGERIAN INSTITUTE OF LEATHER AND SCIENCE TECHNOLOGY</font></h2>
			<h3>P.O Box, 1034, Samaru, Zaria.</h3>
		</center>
	<div class="navbar-header" style="background-color: white;">
		<a class="navbar-brand" href="index.php"><font color="#66CC99"><img src="logo.jpg" title="NILEST Logo" class="img-responsive" width="30"></font></a><BR

		<button style="background-color: #66CC99;" type="button" class="navbar-toggle" data-toggle="collapse"
		data-target="#example-navbar-collapse">
		
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		
	</div>
	<div class="collapse navbar-collapse" style="background-color: #66CC99;" id="example-navbar-collapse">
		<ul  id="list" class="nav nav-justified">
			<li><a href="index.php"> Home</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Directorates <b class="caret"></b>
			</a>
			<ul class="dropdown-menu" style="background-color: #66CC99; border-radius: 3px;">
				<li><a href="polyenvi.php">Polymer and Environmental Technology</a></li>
				<li><a href="sciencetech.php">Science Technology</a></li>
				<li><a href="leathergoods.php">Leather and Leather Goods</a></li>
				<li><a href="resdev.php">Research and Development</a></li>
				</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Admission <b class="caret"></b>
			</a>
			<ul class="dropdown-menu" style="background-color: #66CC99; border-radius: 3px;">
				<li><a href="check_admission.php">Check Admission Status</a></li>
				<li><a href="admission_form.php">Apply for Admission</a></li>
				<li><a href="guideline.php">Admission Guideline</a></li>
				</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Courses <b class="caret"></b>
			</a>
			<ul class="dropdown-menu" style="background-color: #66CC99; border-radius: 3px;">
				<li><a href="course.php?id=cs">Computer Science</a></li>
				<li><a href="course.php?id=slt">Science Lab Tech.</a></li>
				<li><a href="course.php?id=plt">Polymer Technology</a></li>
				<li><a href="course.php?id=gns">Production Management</a></li>
				<li><a href="course.php?id=dft">Footwear Technology</a></li>
				<li><a href="course.php?id=lt">Leather Technology</a></li>
				</ul>
			</li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a class="btn btn-info" id="idd" onmousedown="bleep.play()" role="link" onclick="goBack()" title="Go to Previous Page"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></li>
			<?php
			if(isset($_SESSION['applicant_id'])){
				echo "<li><a href='logout.php'>Logout</a></li>";
			}
			?>
			
			
		</ul>
	</div>
</nav>
<br>
<br><script type="text/javascript">
			function goBack(){
				window.history.back();
			}
		</script>
		<style type="text/css">
			#idd{
				position: fixed;
				top: 10%;
				right:1%;
			}
		</style>
		
