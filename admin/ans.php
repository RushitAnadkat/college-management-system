<?php //session_start();
	include("utility.php");
	include("welcome.php");
		require("header.html");
		echo "<div class='ans' style='margin-top:25px;'>";
		echo "<h1>My Answers</h1>";
	$sql="SELECT * FROM answer,question where answer.user_id=1 and answer.question_id=question.question_id";
	/*$sql="SELECT * FROM answer,question where answer.user_id=$_SESSION[uid] and answer.question_id=question.question_id";*/
	$result=ExecuteQuery($sql);
	while($row=mysql_fetch_array($result))
	{
		echo "<span style'display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
			echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px;'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
			echo "</span>";
			echo "<br />";
			
			echo $row[answer_detail];
			echo "<br />";
			
			echo $row[datetime];
			echo "<br />";
			echo "<div class=line></div>";
	}
	echo "</div>";
?>