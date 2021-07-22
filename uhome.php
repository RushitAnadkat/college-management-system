<?php /*session_start();*/
	require("header2.html");
	/*require("CheckUser.php");*/
	
include("utility.php");
include("welcome.php");?>
<style type="text/css">
.form{
padding:0px;
margin-top:25px;
}
h4{
margin-left:30px;
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
<h4><a href="que.php" >MY Question</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php" >MY Answered</a>
<span style="float:right;">Search : <input type="text" name="serach" /><input type="submit" name="submit" value="Search" /></span></h4><br /><br />

<?php
 $sql="Select * from question,users where question.user_id=users.user_id ORDER BY datetime";
 $result=ExecuteQuery($sql);
 while($row=mysql_fetch_array($result))
 {
 	echo "<span style'display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; width:auto;'>";
	echo "<span style='display:block; height:30px; background-color:#999999; font-weight:bold; line-height:30px; '><a href='questionview.php?qid=$row[question_id]'>Topic:- $row[heading] </a></span>";
	echo "<table>";
	echo "<tr><td valign='top' width='100px'><img src='Images/1.png' alt='user_photo' class='uimg' style='border-radius:50%; vertical-align:50%; width:50px; height:50px;' />
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
