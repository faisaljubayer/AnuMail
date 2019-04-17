<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>AnuMail | Its better to give than to receive.</title>
<script language="JavaScript1.1">
		<!--

		/*
		JavaScript Image slideshow:
		By JavaScript Kit (www.javascriptkit.com)
		Over 200+ free JavaScript here!
		*/

		var slideimages=new Array()
		var slidelinks=new Array()
		function slideshowimages(){
		for (i=0;i<slideshowimages.arguments.length;i++){
		slideimages[i]=new Image()
		slideimages[i].src=slideshowimages.arguments[i]
		}
		}

		function slideshowlinks(){
		for (i=0;i<slideshowlinks.arguments.length;i++)
		slidelinks[i]=slideshowlinks.arguments[i]
		}

		function gotoshow(){
		if (!window.winslide||winslide.closed)
		winslide=window.open(slidelinks[whichlink])
		else
		winslide.location=slidelinks[whichlink]
		winslide.focus()
		}

		//-->
		</script>
		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
			table,td{padding:5px;broder-radius:5px}
		</style>
</head>

<body background="./images/background.jpg">
<?php include('ads/header.php');?>
<table width="975" border="1" align="center" style="background-image:url('slide image/bkgrnd_greydots.png');">
  <tr>
    <td height="135" colspan="2">
	<img src="food1.jpg" name="slide" border="0" width="100%" height="200">
	<script>
	<!--
	//configure the paths of the images, plus corresponding target links
	slideshowimages("slide image/food0.jpg")
	slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

	//configure the speed of the slideshow, in miliseconds
	var slideshowspeed=2000

	var whichlink=0
	var whichimage=0
	function slideit(){
	if (!document.images)
	return
	document.images.slide.src=slideimages[whichimage].src
	whichlink=whichimage
	if (whichimage<slideimages.length-1)
	whichimage++
	else
	whichimage=0
	setTimeout("slideit()",slideshowspeed)
	}
	slideit()

	//-->
</script>	</td>
  </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php">HOME</a>
		<a href="index.php?chk=about">ABOUT US</a>
		<a href="index.php?chk=login">LOGIN</a>
		<a href="index.php?chk=registraion">NEW USER?</a>
		<a href="index.php?chk=5"></a>
		<a href="index.php?chk=contact">CONTACTCT US</a>	</td>
  </tr>
  <tr>
    <td height="613" valign="top" style="padding:10px">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<h2 align="center"><u>AnuMail, It is better to give than to receive.</u></h2>
	
	<br>
<h4><u>Anumail Features:</u></h4>

<ul>
	<li>Send, Receive or Save emails.</li>
	<li>User's smart personal dashboard</li>
	<li>Read or write news.</li>
	
</ul>

		<br>	<br>
<div align="right">
<center><h4>Send E-mails to anywhere !</h4></center>
<p>With AnuMail you can send messages to anybody located in any part of the world.</p>
</div>

	<br>	<br>
<div align="left">
<h4>Explore a medium free of charge !</h4>
<p>No more paid texting to friends. Now enjoy sending texts to friends free of charge !</p>
</div><br>	<br>
<center>Built with php and love <3</center>	
	
	<?php
	}
	if($chk=="registraion")
	{
	include_once('regis.php');
	}
	if($chk=="login")
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	if($chk=="contact")
	{
	include_once('contactus.php');
	}
	if($chk=="7")
	{
	include_once('latestupdDisp.php');
	}
	if($chk=="about")
	{
	include_once('about.php');
	}
	

	?>	</td>
    <td width="130">
	<marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()">
<a href="index.php?chk=7">Latest Updates</a></marquee>
	</td>
  </tr>
  <tr>
    <td height="47" colspan="2">
	<h2 align="center">Developed by Fatema Zohra Anannya</h2></td>
  </tr>
</table>
<?php include('ads/header.php');?>
</body>
</html>
