<?php
	session_start();
	include("utility.php");
	require("header2.html");
	echo "<div class='questionview' style='margin-top:150px;'>";
	$upd="UPDATE question set views=views+1 where question_id=$_GET[qid]";
	$res=ExecuteQuery($upd);
	$str="SELECT * from question,users where users.user_id=question.user_id AND question_id=$_GET[qid]";
	$result=ExecuteQuery($str);
	
	$no_row=mysql_num_rows($result);
	$head="";
	if($no_row>0)
	{
		while($row=mysql_fetch_array($result))
		{
			$head=$row[heading];
			echo "<h1>";
			echo $head;
			echo "</h1>";
			echo "<span style'display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
			echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px;'><a href='answer.php?qid=$row[question_id]'>REPLY..</a><div class='view' style='display:inline; float:right'>Views : $row[views]</div></span>";
			echo "<table>";
			echo "<tr><td valign=top width=100px;><img src='Images/1.png' alt='user_photo' class='uimg' style='border-radius:50%; vertical-align:50%; width:50px; height:50px;' /><br>
				$row[name]&nbsp;$row[surname]</td>
				<td valign=top><b>$head</b><br>
				$row[datetime]<br><br>
				$row[question_detail]</td></tr>";
			echo "</table></span><div class=h10></div>";
		}
	}
	echo "</div>";
?>
<?php
	//$upd="Update answer set likes=likes+1 where answer_id=$_GET[qid]";
	//$res=ExecuteQuery($upd);
	$sql="SELECT * FROM answer,users where question_id=$_GET[qid] and answer.user_id=users.user_id ORDER BY datetime desc";
	$result1=ExecuteQuery($sql);
	$no_row1=mysql_num_rows($result1);
	if($no_row1>0)
	{
		while($row1=mysql_fetch_array($result1))
		{
			echo "<span style'display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
			echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px;'><a href='answer.php?qid=$_GET[qid]'>REPLY..</a><a href='like.php?qid=$row1[answer_id]' class='view2' onclick='myfunction(this)'><div class='like' style='display:inline; float:right'>LIKE $row1[likes]</div></a></span>";
			echo "<table>";
			echo "<tr><td valign=top><img src='Images/1.png' alt='user_photo' class='uimg' style='border-radius:50%; vertical-align:50%; width:50px; height:50px;' /><br />
			$row1[name] $row1[surname]<td valign=top><b>RE: $head</b><br />$row1[datetime]<br><br>$row1[answer_detail]</tr>";
			echo "</table></span><div class=h10></div>";
		}
	}
	echo "</div>";
include("footer.php");
?>
				
