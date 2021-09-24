<!DOCTYPE html>
<html lang="en">
<head>
<title>Search for a donor</title>
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
.tab
{
    border-spacing:1px;
	border:1px solid;
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
			<a href="homepagelogin.html"><img src="images/bloodlogo1.png" alt=""></a>
		</div>
		
		<div class="wc-login">
			<table style="width:64%">
			<tr>
			<td>
<a href="viewprofile.php" 
style="font-style:italic;text-decoration:none;color:red;font-size:16px;position:relative;left:9px;">View Profile</a></td>
			<td>|</td><td>
<a href="edit.php" 
style="font-style:italic;text-decoration:none;color:red;font-size: 16px;position:relative;left: 9px;">Edit Profile</a></td>
		<td>|</td>	<td>
<a href="logout.php" style="font-style:italic;text-decoration:none;color:red;font-size:16px;position: relative;left: 9px;">Logout</a></td></tr>
			
			</table>
			
		
		</div>
	</div>
    </div>
	<div id="nav-main">
			<ul>
					 <li><a class="nav-first current" href="homepagelogin.html">HOME</a></li>
          <li><a href="Eligibilitylogin.html">ELIGIBILITY</a></li>
		  <li><a href="Bloodbankslogin.html">BLOOD BANKS</a></li>
		  <li><a href="Registerlogin.php">REGISTER</a></li>
          <li><a href="Searchlogin.html">SEARCH</a></li>
		  <li><a href="postlogin.html">POST</a></li>
		  
          <li><a href="Bloodfactslogin.html">BLOOD FACTS</a></li>
          <li class="nav-last" ><a href="viewpostlogin.php">VIEW POST</a></li>
		                                                                 
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
<center>    <p style="text-align:center;color:blue;font-style:italic;font-size:30px">Search Results...</p>  </center>
<br><br>
<center>
<?php
$state=$_REQUEST['state'];
$bloodgrp=$_REQUEST['bloodgrp'];
 			
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM register";
$result=mysql_query($query)or die("Query failed=".mysql_error());
			
$flag=0;			
while($row=mysql_fetch_array($result))
{
		if($row['bloodgrp']==$bloodgrp)
		{
			if($row['state']==$state)
			{
					$flag=1;
								echo "<table class='tab' cellpadding='0' cellspacing='0' id='table-one'>";
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Donor Id</strong><td style='font-size:18px;font-style:italic;'><strong>".$row["donorid"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Name</strong><td style='font-size:18px;font-style:italic;color:blue'><strong>".$row["name"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Blood Group<td style='font-size:18px;font-style:italic;color:red'><strong>".$row["bloodgrp"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Age<td style='font-size:18px;font-style:italic;'><strong>".$row["age"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Weight<td style='font-size:18px;font-style:italic;'><strong>".$row["weight"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Date of Birth</strong><td style='font-size:18px;font-style:italic;'><strong>".$row["dob"]."</strong></strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Gender<td style='font-size:18px;font-style:italic;'><strong>".$row["gender"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Last donate on<td style='font-size:18px;font-style:italic;'><strong>".$row["lastdonate"]."</strong></td></tr>";
					$from =$row["lastdonate"];
					
					
					if(date_create('0000-00-00')!=date_create($row["lastdonate"]))
					{
						$mon=date_diff(date_create($from), date_create('today'))->m;
					
					if($mon>=3)
					{
						echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Eligibility<td style='font-size:18px;font-style:italic;color:green'><strong>Eligible to donate</strong></td></tr>";
					}
					else
					{
						echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Eligibility<td style='font-size:18px;font-style:italic;color:red;'><strong>Not Eligible to donate</strong></td></tr>";
					}
					}
				
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Street Name<td style='font-size:18px;font-style:italic;'><strong>".$row["streetname"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Location<td style='font-size:18px;font-style:italic;'><strong>".$row["location"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>District<td style='font-size:18px;font-style:italic;'><strong>".$row["district"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>State<td style='font-size:18px;font-style:italic;'><strong>".$row["state"]."</strong></td></tr>";
					
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Mobile no</strong><td style='font-size:18px;font-style:italic;'><strong>".$row["mobno"]."</strong></td></tr>";
					
					if($row["offno"]==0)
					{
						echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Office no<td style='font-size:18px;font-style:italic;'><strong>Not available</strong></td></tr>";
					}
					else
					{
					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Office no<td style='font-size:18px;font-style:italic;'><strong>".$row["offno"]."</strong></td></tr>";
					}

					echo "<tr width='100' bgcolor='white'><td style='font-size:18px;font-style:italic;'><strong>Email<td style='font-size:18px;font-style:italic;'><strong>".$row["email"]."</strong></td></tr>";
					echo "</table>";
					echo "<br><br><br>";
			}
		}	
	}
			if($flag==0)
			{
				echo "<p style='font-type:bold;font-size:16px;color:red'>NO RESULTS FOUND<p>";
			}
	
?>

<a href="Searchlogin.html"> 
<input class="buttom" name="submit" id="submit" tabindex="16" value="Back" type="submit"> 	
</a>


</center>
<br><br><br>
</div>


</div>
<br>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3">
          <div class="spacer-1"> <a href="homepagelogin.html"><img src="images/footerlogo.png" alt=""></a> </div>
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
