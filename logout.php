<?php
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$sql1="DELETE FROM login";
				if(mysql_query($sql1))
    			{
					include("homepage.html");

				}

?>