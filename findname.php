<?php
$name=$_REQUEST['name'];
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM register";

$result=mysql_query($query)or die("Query failed=".mysql_error());

$flag=0;

while($row=mysql_fetch_array($result))
{
       if($row['username']==$name)
       {
	   
				$flag=1;
				$p=$row["password"];
				echo "<script>";
				echo "alert('Username exits your password is $p')";
				echo "</script>";
			/*	$v1=$row['username'];
				$v2=$row['password'];
				$v3=$row['donorid'];
				$sql1="insert into reset(uname,pass,did)values('$v1','$v2','$v3')";
				*/
					include("homepage.html");
					break;
					
		}
}
if($flag==0)
{
	echo "<script>";
	echo "alert('Username does not exits please register')";
	echo "</script>";
	include("register.html");
}
?>
