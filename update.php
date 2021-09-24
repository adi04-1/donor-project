<?php
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$dob=$_REQUEST['dob'];
$weight=$_REQUEST['weight'];
$mobileno=$_REQUEST['mobileno'];
$bloodgrp=$_REQUEST['bloodgrp'];
$officeno=$_REQUEST['officeno'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$location=$_REQUEST['location'];
$streetname=$_REQUEST['streetname'];
$district=$_REQUEST['district'];
$state=$_REQUEST['state'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$ldate=$_REQUEST['ldate'];
$did=$_REQUEST['did'];

$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$test=strcmp($email,"");
if($test==0)
{
	$email="Not available";
}
$query="SELECT * FROM register";

$result=mysql_query($query)or die("Query failed=".mysql_error());

$flag=0;


$state=str_replace("_"," ",$state);
$district=str_replace("_"," ",$district);
$name=str_replace("_"," ",$name);
$streetname=str_replace("_"," ",$streetname);
$email=str_replace("_"," ",$email);
$location=str_replace("_"," ",$location);



while($row=mysql_fetch_array($result))
{
       if($row['donorid']==$did)
	   {
			$sql1="UPDATE register set state = '$state' where donorid='$did' ";
			if(mysql_query($sql1))
			{
			
			}
			
			$sql2="UPDATE register set name = '$name' where donorid='$did' ";
			if(mysql_query($sql2))
			{
				
			}

		    $sql3="UPDATE register set age = '$age' where donorid='$did' ";
			if(mysql_query($sql3))
			{
			
			}

			$sql4="UPDATE register set bloodgrp = '$bloodgrp' where donorid='$did' ";
			if(mysql_query($sql4))
			{
			
			}

			
			$sql5="UPDATE register set gender = '$gender' where donorid='$did' ";
			if(mysql_query($sql5))
			{
			
			}


			$sql6="UPDATE register set dob = '$dob' where donorid='$did' ";
			if(mysql_query($sql6))
			{
			
			}


			$sql7="UPDATE register set lastdonate = '$ldate' where donorid='$did' ";
			if(mysql_query($sql7))
			{
			
			}
			$sql8="UPDATE register set mobno = '$mobileno' where donorid='$did' ";
			if(mysql_query($sql8))
			{
			
			}
			$sql9="UPDATE register set location = '$location' where donorid='$did' ";
			if(mysql_query($sql9))
			{
			
			}
			$sql10="UPDATE register set district = '$district' where donorid='$did' ";
			if(mysql_query($sql10))
			{
			
			}
			$sql11="UPDATE register set streetname = '$streetname' where donorid='$did' ";
			if(mysql_query($sql11))
			{
			
			}
			$sql12="UPDATE register set offno = '$officeno' where donorid='$did' ";
			if(mysql_query($sql12))
			{
			
			}
			$sql13="UPDATE register set email = '$email' where donorid='$did' ";
			if(mysql_query($sql13))
			{
			
			}
			$sql14="UPDATE register set username = '$username' where donorid='$did' ";
			if(mysql_query($sql14))
			{
			
			}
			$sql15="UPDATE register set password = '$password' where donorid='$did' ";
			if(mysql_query($sql15))
			{
			
			}
			$sql16="UPDATE register set weight = '$weight' where donorid='$did' ";
			if(mysql_query($sql16))
			{
			
			}
			echo "<script>";
			echo "alert('Updation successful')";
			echo "</script>";
			include('viewprofile.php');
			break;
			
		}
	}			
			

?>
