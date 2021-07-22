<?php //session_start();
	include("utility.php");
	require("header.html");
?>
<script type="text/javascript">
	function check(f){
	
		if(f.ata.value=="")
		{
			document.getElementById("spuid").innerHTML="Please Enter Answer";
			f.ata.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
<?php
	$sql="Select heading from question where question_id=$_GET[qid]";
	$rows=ExecuteQuery($sql);
	$row=mysql_fetch_array($rows);
?>
<div class="abswer" style="margin-top:150px;">
<form action="answerH.php" method="post" onSubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET[qid];?>" name="qid" />
    <table>
    <tr><td><b>RE: <?php echo $row[heading]; ?></b></td></tr>
    <tr><td>Answer</td></tr><br />
    <tr><td><textarea rows="4" cols="38" name="ata"></textarea><span id="spuid" style="color:#FF0000"></span></td></tr><br />
    <tr><td><input type="submit" value="GO"  /></td></tr>
    </table>
</form>
</div>