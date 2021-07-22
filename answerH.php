<?php //session_start();
	include("utility.php");
	$qid=$_POST[qid];
	$ata=$_POST[ata];
	$uid=1; //$_POST[uid];
	$sql="INSERT into answer (question_id,answer_detail,user_id) values ('$qid','$ata',1)";
	$result=ExecuteNonQuery($sql);
	if($result)
	{
		header("location:questionview.php?qid=$qid");
	}
	else
	{
		echo "<script>alert('Sorry,\n Something Went Wrong,\nPlz Try again....')</script>";
	}
?>
	