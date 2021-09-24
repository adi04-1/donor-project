<!DOCTYPE html>
<html lang="en">
<head>
<title>View post</title>
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
    border-spacing:0px;
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
.fo
{
	font-family:Times new roman;
	font-size: 16px;
	display: block;
	font-style:bold;
	color: black;

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
          <li ><a href="Bloodfacts.html">BLOOD FACTS</a></li>
          <li class="nav-first current" ><a href="viewpost.php">VIEW POST</a></li>
		                                                                 
			</ul>
		 </div>
		  <div class="clear"></div>
    </div>
  </div>	
</header><br>
<!--==============================content================================-->
<a href="post.html">
<marquee direction="right" height="20" scrollAmount=4 scrollDelay=5 

class="sidelink" onMouseDown="this.stop()" onMouseOver="this.stop()" 

onMouseMove="this.stop()" onMouseOut="this.start()" >
<p style="text-align:center;color:red;font-style:italic;font-size:20px">To Post Your Blood Requirements click here...</p></marquee> 
</a><br>
<center> <p style="text-align:center;color:blue;font-style:italic;font-size:30px">Blood Requirements</p> 
<br>
</center>

<?php
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM postreq ORDER BY postno DESC";
$result=mysql_query($query)or die("Query failed=".mysql_error());
		
while($row=mysql_fetch_array($result))
{	
	echo "<div class='wc-in-content'><div class ='form wc-round-crnr'><div class='fo'>";
		echo "<table width='600' border='0' align='center' cellpadding='2' cellspacing='0'>
         <tr valign='top'>
          <td width='50%'><table width='100%' border='0' align='center' cellpadding='6' cellspacing='0'>
            <tr bgcolor='#D9CEBA'>
              <td colspan='2'style='color:blue' ><strong>REQUIREMENT DETAILS</strong></td>
            </tr>";
            echo "<tr>
              <td>State</td>
              <td>".$row["state"]."</td>
            </tr>
            <tr>";
             echo "<td>District</td>
              <td>".$row["district"]."</td>
            </tr>";
            echo "<tr>
              <td>Blood Group </td>
              <td style='color:red' >".$row["bloodgrp"]."</td>
            </tr>";
            echo "<tr>
              <td>No of Units</td>
              <td>".$row["units"]."</td>
            </tr>
            <tr>
              <td>Reason for Requirement </td>
              <td>".$row["reason"]."</td>
            </tr>
            <tr>
              <td>Required Before </td>
              <td>".$row["needbef"]."</td>
            </tr>
            <tr>
              <td>Hospital Name </td>
              <td>".$row["hname"]."</td>
            </tr>
          <tr>
              <td>Contact no</td>
              <td>".$row["contactno"]."</td>
            </tr>
          
		  </table></td>
          <td width='50%'><table width='100%' border='0' align='center' cellpadding='6' cellspacing='0' >
            <tr bgcolor='#D9CEBA'>
              <td colspan='2'style='color:blue'><strong>PATIENT DETAILS</strong> </td>
            </tr>
            <tr>
              <td>Patient Name </td>
              <td>".$row["pname"]."</td>
            </tr>
            <tr>
              <td>Patient Age </td>
              <td>".$row["age"]."</td>
            </tr>
            <tr>
              <td>Patient Gender </td>
              <td>".$row["gender"]."</td>
            </tr>
            <tr>
              <td colspan='2'>&nbsp;</td>
            </tr>
            <tr bgcolor='#D9CEBA'>
              <td colspan='2'style='color:blue'><strong>CONTACT DETAILS</strong> </td>
            </tr>
            <tr>
              <td> Name </td>
              <td>".$row["name"]."</td>
            </tr>
            <tr>
              <td>Mobile</td>
              <td>".$row["mobno"]."</td>
            </tr>";
            if($row["email"]!="Not available")
			{
				echo "<tr>
              <td>Email</td>
              <td>".$row["email"]."</td>
				</tr>";
            }
			
			echo"<tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
		</table>";

	
	
	echo "<br><table width=><tr>";
	echo "<td ><p style='color:green;font size:17px;text-align:right'><strong>Posted on  ".$row["poston"]."</strong></p></td></tr>";
	echo "</table></div></div></div><br><br>";
}
	
?>

<center>
<table>
<tr><td>
<a href="homepage.html"> 
<input class="button" name="submit" id="submit" tabindex="16" value=" Back " type="submit"> 	
</a>
</td></tr>		
</table>

			

</center>
<br>
</div>
</div>
<br>
<!--==============================footer=================================-->
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
