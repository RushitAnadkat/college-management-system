<?php
	error_reporting(1);
	function ExecuteQuery($SQL)
	{
		$con=mysql_connect("localhost","root","");
		mysql_select_db("College",$con);
		$row=mysql_query($SQL);
		$cl=mysql_close();
		return $row;
	}
	function ExecuteNonQuery($SQL)
	{
		$con=mysql_connect("localhost","root","");
		mysql_select_db("College",$con);
		$row1=mysql_query($SQL);
		$cl=mysql_close();
		return $row1;
	}
