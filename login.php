<?php
$name=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM register where username='$name'";

$result=mysql_query($query)or die("Query failed=".mysql_error());

$flag=0;

while($row=mysql_fetch_array($result))
{
	if($row['username']==$name)
    {  
       if($row['password']==$pass)
       {
	   
				$flag=1;
				echo "<script>";
				echo "alert('Login Successful')";
				echo "</script>";
				$v1=$row['username'];
				$v2=$row['password'];
				$v3=$row['donorid'];
				$sql1="insert into login(uname,pass,did)values('$v1','$v2','$v3')";
				if(mysql_query($sql1))
    			{
					include("homepagelogin.html");
					break;
				}	
		}
	}	
}
if($flag==0)
{
	echo "<script>";
	echo "alert('Username or password is incorrect')";
	echo "</script>";
	include("reset.html");
}
?>
