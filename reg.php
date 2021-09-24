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

/*
echo $name;
echo "\n";
echo $age;
echo "\n";
echo $dob;echo "\n";
echo $mobileno;echo "\n";
echo $bloodgrp;echo "\n";
echo $officeno;echo "\n";
echo $gender;echo "\n";
echo $email;echo "\n";
echo $location;echo "\n";
echo $streetname;echo "\n";
echo $district;echo "\n";
echo $state;echo "\n";
echo $username;echo "\n";
echo $ldate;echo "\n";
*/
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");

$test=strcmp($email,"");
if($test==0)
{
	$email="Not available";
}
$flag=0;

$query="SELECT * FROM register";

$result=mysql_query($query)or die("Query failed=".mysql_error());


while($row=mysql_fetch_array($result))
{
       if($row['username']==$username)
       {
			$flag=1;
			echo"<script>";
			echo"alert('username already exits please try with some other name')";
			echo"</script>";
			include('register.html');
			break;
	  }
}
if($flag==0){
$sql1="insert into register(name,age,weight,dob,gender,bloodgrp,lastdonate,mobno,offno,email,streetname,location,district,state,username,password) values('$name','$age','$weight','$dob','$gender','$bloodgrp','$ldate','$mobileno','$officeno','$email','$streetname','$location','$district','$state','$username','$password')";
	
				if(mysql_query($sql1))
    			{
					echo"<script>";
					echo"alert('registration successful')";
					echo"</script>";
					include("view.php");
				}
				else
				{
					echo"<script>";
					echo"alert('registration failed')";
					echo"</script>";
				}
}



/*
   $subject="Registration confirmation mail";
   $message="Thanks for making registeration @ onlineblooddonors.com";
   $header="From:onlineblooddonors@gmail.com\r\n";
   $retval=mail($email,$subject,$message,$header);
   if( $retval == true )  
   {
   		echo"<script>";
		echo "alert('Message sent successfully...')";
		echo"</script>";
   }
   else
   {
      echo "Message could not be sent...";
   }
	*/
	
	?>