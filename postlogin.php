<?php
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$units=$_REQUEST['units'];
$req=$_REQUEST['req'];
$hname=$_REQUEST['hname'];
$pname=$_REQUEST['pname'];
$mobileno=$_REQUEST['mobileno'];
$bloodgrp=$_REQUEST['bloodgrp'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$district=$_REQUEST['district'];
$state=$_REQUEST['state'];
$bef=$_REQUEST['bef'];
$contactno=$_REQUEST['contactno'];
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");

$test=strcmp($email,"");
if($test==0)
{
	$email="Not available";
}

$poston=new DateTime('today');

$sql1="insert into postreq(pname,age,gender,bloodgrp,units,hname,contactno,state,district,needbef,name,mobno,email,reason,poston) values('$pname','$age','$gender','$bloodgrp','$units','$hname','$contactno','$state','$district','$bef','$name','$mobileno','$email','$req',now())";
	
				if(mysql_query($sql1))
    			{
					echo"<script>";
					echo"alert('Posted successful')";
					echo"</script>";
					include("viewpostlogin.php");
				}
				else
				{
					echo"<script>";
					echo"alert('posting failed')";
					echo"</script>";
				}
        
?>