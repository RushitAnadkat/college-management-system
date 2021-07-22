<?php /*session_start();*/
	/*require("CheckUser.php");*/

include("utility.php");
include("sidenavigation.html");?>
<style type="text/css">
.form{
padding:0px;
margin-top:25px;
}
h1{
margin-left:30px;
color:#0099FF;
font-size:36px;
}
h4 a
{
	font-size:30px;
	text-decoration:none;
	color:#0099FF;
	font-family:Verdana, Arial, Helvetica, sans-serif;
}
span a{
text-decoration:none;
font:"Times New Roman", Times, serif;
font-size:18px;
color:#990000;
}
td .a{
color:#990099;
font-size:16px;
}

</style>


<section class="form">
<link rel="stylesheet" type="text/css" href="Stylesheet/style.css" />
<script type="text/javascript">
document.getElementById("uhome").className="active";
</script>

<?php
echo "<h1>Discussion Board &nbsp; &nbsp;<a href='question.php' style='color:#00CCFF; text-decoration:none;'>Ask Question</h1></a>";
 $sql="Select * from question,users where question.user_id=users.user_id ORDER BY datetime";
 $result=ExecuteQuery($sql);
 while($row=mysql_fetch_array($result))
 {
 	echo "<span style'display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
	echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; '><a href='questionview.php?qid=$row[question_id]'>Topic:- $row[heading] </a><a href='delete.php?qid=$row[question_id]' style='float:right'>Delete</a></span>";
	echo "<table>";
	echo "<tr><td valign='top' width='100px'><img src='../Images/1.png' alt='user_photo' class='uimg' style='border-radius:50%; vertical-align:50%; width:50px; height:50px;' />
			<br />
			<span class=a>$row[name] $row[surname]</span>
			<td valign='top'>
			Q.$row[question_detail] <br ><br />
			$row[datetime]<br /><br />
			</td></tr>";
	echo "</table></span><div class='h10'></div>";
}
?>
</section>
