<?php session_start();
	//require("CheckUser.php");
	require("header.html");

	include("utility.php");
		include("welcome.php");
	echo "<div class='que' style='margin-top:25px;'>";
	echo "<h1>My Question &nbsp; &nbsp;";
	echo "<a href='question.php' style='color:#00CCFF; text-decoration:none;'>Ask Question</h1></a>";

	$sql="SELECT * FROM question where user_id=1";   //$_SESSION['uid'];
	$result=ExecuteQuery($sql);
	while($row=mysql_fetch_array($result))
	{
		echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
		echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; font-size:22px;'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo "</span>";
		echo "<br />";
		echo $row['question_detail'];
		echo "<br />";
		echo $row['datetime'];
		echo "<div class='line'></div>";
		echo "<hr>";
		
	}
	echo "</div>";
?>
	
	