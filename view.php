<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<link rel="shortcut icon" href="images/ibb_ficon.png" type="image/x-icon">
<link href="cssfile/normalize.css" type="text/css" rel="stylesheet">
<link href="cssfile/jquery-ui.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="cssfile/nivo-slider.css" type="text/css" media="screen">
<link href="cssfile/style.css" type="text/css" rel="stylesheet">
<link href="cssfile/validationEngine.jquery.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cssfile/jquery.fancybox.css" media="screen">

	<script type="text/javascript" async="" src="cssfile/ga.js"></script>
	<script type="text/javascript" src="cssfile/jquery.js"></script>	
	<script type="text/javascript" src="cssfile/jquery-ui.js"></script>	
	<script type="text/javascript" src="cssfile/dd_roundies.js"></script>
	<script type="text/javascript" src="cssfile/nivoslider.js"></script>
	<script type="text/javascript" src="cssfile/custom-form-elements.js"></script>
<script type="text/javascript" src="cssfile/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="cssfile/jquery.validationEngine.js"></script>
<script type="text/javascript" src="cssfile/jquery.fancybox.js"></script>
<script type="text/javascript" src="cssfile/jquery.cookie.js"></script>

<meta charset="utf-8">
<link rel="shortcut icon" href="download.png" type="image/png">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" type="text/css" href="css/stylenewser.css" media="all" />
    
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Vegur_500.font.js"></script>
<script src="js/Ropa_Sans_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>

<style>
table
{
    border-spacing:5px;
}
format
{
	font-family: 'Alegreya SC', Georgia, serif;
	font-size: 25px;
	line-height: 20px;
	display: block;
	font-weight: 400;
	font-style: italic;
	color: #000000;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}
</style>
	
</head>
<!--==============================header=================================-->
<body id="page3">
<br>
<header>
<header>
  <div class="border-bothome">
  <div id="wc-container">
	<div id="wc-header">
		<div id="logo">
			<a href="homepage.html"><img src="images/bloodlogo1.png" alt=""></a>
		</div>
		
		<div class="wc-login">
				<form method="post" action="login.php" id="login" name="login">
				<input type="text" name="username" id="username" value="" placeholder="Username" class="txt validate[requireduser]">
				<input type="password" name="password" id="password" value="" class="txt validate[requiredpass]" placeholder="Password">
				<input type="image" alt="Login" src="images/btn-login.jpg" name="submit" value="submit" style="position:relative;top:3px;"
				onclick="fname()">
				<div class="clear"></div>
			</form>
			<table style="width:60%">
			<tr><td>
			<a href="reset.html" style="test-style:italic; text-decoration:none;color:#666;font-size: 12px;position: relative;left: 9px;">forgot Password?</a></td>
			<td>
			<a href="register.html" style="test-style:italic; text-decoration:none;color:#666;font-size: 12px;position: relative;left: 9px;">Sign Up</a></td></tr>
			</table>
		
		</div>
	</div>
    </div>
	<div id="nav-main">
			<ul>
					 <li><a class="nav-first current" href="homepage.html">HOME</a></li>
          <li><a href="Eligibility.html">ELIGIBILITY</a></li>
		  <li><a href="Bloodbanks.html">BLOOD BANKS</a></li>
		  <li><a href="Register.html">REGISTER</a></li>
          <li><a href="Search.html">SEARCH</a></li>
		  <li><a href="post.html">POST</a></li>
          <li><a href="Bloodfacts.html">BLOOD FACTS</a></li>
          <li  ><a href="viewpost.php">VIEW POST</a></li>
		                                                                 
			</ul>
		 </div>
		  <div class="clear"></div>
    </div>
  </div>	
</header>
<!--==============================content================================-->
<div class="wc-in-content">
<br><br>
<div class ="form wc-round-crnr">
<center>    <p style="text-align:center;color:blue;font-style:italic;font-size:30px">Profile Details</p>  </center>
<br><br>
<center>
<table cellpadding="0" cellspacing="0" id="table-one">
<?php
 			
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM register";
$result=mysql_query($query)or die("Query failed=".mysql_error());
			
$flag=0;			
while($row1=mysql_fetch_array($result))
{
						$row=$row1;
}	
		
		
		

			echo "<table cellpadding='0' cellspacing='0' id='table-one'>";
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-size:17px;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Donor Id</strong><td style='color:black;padding:7px;font-style:bold;font-size:17px;border:1px solid #CCCCCC;'><strong>".$row["donorid"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;font-style:bold;border:1px solid #CCCCCC;'><strong>Name</strong><td style='color:blue;font-style:bold;padding:7px;font-size:16px;border:1px solid #CCCCCC;'><strong>".$row["name"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;font-style:bold;border:1px solid #CCCCCC;'><strong>Blood Group<td style='color:red;font-style:bold;padding:7px;font-size:16px;border:1px solid #CCCCCC;'><strong>".$row["bloodgrp"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Age<td style='color:black;padding:7px;font-style:bold;font-size:16px;border:1px solid #CCCCCC;'><strong>".$row["age"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Weight<td style='color:black;padding:7px;font-style:bold;font-size:16px;border:1px solid #CCCCCC;'><strong>".$row["weight"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Date of Birth</strong><td style='color:black;padding:7px;font-size:16px;border:1px solid #CCCCCC;font-style:bold;'><strong>".$row["dob"]."</strong></strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Gender<td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["gender"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-size:16px;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Last donate on<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["lastdonate"]."</strong></td></tr>";
					$from =$row["lastdonate"];
					
					
					if(date_create('0000-00-00')!=date_create($row["lastdonate"]))
					{
						$mon=date_diff(date_create($from), date_create('today'))->m;
					
					if($mon>=3)
					{
						echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Eligibility<td style='font-style:bold;font-size:16px;color:green;padding:7px;border:1px solid #CCCCCC;'><strong>Eligible to donate</strong></td></tr>";
					}
					else
					{
						echo "<tr width='100' bgcolor='white'><td
						
						style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Eligibility<td style='font-style:bold;font-size:16px;color:red;padding:7px;border:1px solid #CCCCCC;'><strong>Not Eligible to donate</strong></td></tr>";
					}
					}
				
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;font-size:16px;padding:7px;border:1px solid #CCCCCC;'><strong>Street Name<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["streetname"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;padding:7px;font-size:16px;border:1px solid #CCCCCC;'><strong>Location<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["location"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;padding:7px;font-size:16px;border:1px solid #CCCCCC;'><strong>District<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["district"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='color:black;font-style:bold;padding:7px;font-size:16px;border:1px solid #CCCCCC;'><strong>State<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["state"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:16px;color:black;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Mobile no<td style='font-style:bold;font-size:16px;color:blue;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["mobno"]."</strong></td></tr>";
					
					if($row["offno"]==0)
					{
				echo "<tr width='100' bgcolor='white'><td style='font-size:16px;color:black;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Office no<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>Not available</strong></td></tr>";
					}
					else
					{
					echo "<tr width='100' bgcolor='white'><td style='font-size:16px;color:black;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Office no<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["offno"]."</strong></td></tr>";
					}

					echo "<tr width='100' bgcolor='white'><td style='font-size:16px;color:black;font-style:bold;padding:7px;border:1px solid #CCCCCC;'><strong>Email<td style='font-style:bold;font-size:16px;color:black;padding:7px;border:1px solid #CCCCCC;'><strong>".$row["email"]."</strong></td></tr>";
					echo "</table>";
					echo "<br><br><br>";
										
?>



<tr><td><br><br><br></td></tr>
<tr><td>
<a href="homepage.html"> 
<input class="buttom" name="submit" id="submit" tabindex="16" value="Back To Home" type="submit"> 	
</a>
</td></tr>				
</table>
</center>
<br><br><br><br><br><br><br>
</div>
<br><br><br><br><br>











</div>
<br><br>
<!--==============================footer=================================-->
<!--<br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br>
-->

<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3">
          <div class="spacer-1"> <a href="homepage.html"><img src="images/footerlogo.png" alt=""></a> </div>
        </div>
        <div class="grid_5">
          <div class="indent-top2">
            <p class="prev-indent-bot">&copy; 2015 Website Template by <a target="_blank" href="#">Sharmila</a></p>Mail us @: <a href="http://www.gmail.com">onlineblooddonors@gmail.com</a> </div>
        </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
          <span class="footer-text">&copy; 2015 <a class="link color-2" href="#">Privacy Policy</a></span> </div>
      </div>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function() {
	$('.slider')._TMS({
		duration:1000,
		easing:'easeOutQuint',
		preset:'diagonalFade',
		slideshow:7000,
		banners:false,
		pauseOnHover:true,
		pagination:true,
		pagNums:false
	});
});
</script>
<div align=center>Donate Blood Save Life</div></body>
</html>
