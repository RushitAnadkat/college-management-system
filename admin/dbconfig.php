<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("college",$con);
	
	if(!mysql_connect())
	{
		echo "Failed to connect with server sorry!!!!".mysql_connect();
	}
?>