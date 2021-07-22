<?php //session_start();
	include("utility.php");
	require("header.html");
?>
<script type="text/javascript">
function check(f)
{
	if(f.ata.value=="")
	{
		document.getElementById("spuid").innerHTML="Please,Enter Question Heading";
		document.getElementById("spuid1").innerHTML="";
		f.ata.focus();
		return false;
	}
	else if(f.ata2.value=="")
	{
		document.getElementById("spuid").innerHTML="";
		document.getElementById("spuid1").innerHTML="Please,Enter Question Description";
		f.ata2.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<div class="abswer" style="margin-top:150px;">
<form action="questionH.php" method="post" onSubmit="return check(this)">
    <table>
    <tr><td><h2>Question Heading : </h2></td><td><textarea rows="2" cols="38" name="ata"></textarea></td><td><span id="spuid" style="color:#FF0000"></span></td></tr>
    <tr><td><h3>Question Description : </h3></td><td><textarea rows="4" cols="38" name="ata2"></textarea></td><td><span id="spuid1" style="color:#FF0000"></span></td></tr>
    <tr><td><input type="submit" value="Add Question" style="margin-left:70px;" /></td></tr>
    </table>
</form>
</div>