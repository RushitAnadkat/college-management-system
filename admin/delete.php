<?php
require("utility.php");
$qry="delete from question where question_id=$_GET[qid]";
$result=ExecuteNonQuery($qry);
if($result)
{
	header("location:uhome.php");
}
else
{
	echo "<script>alert('Unable to Delete Record');</script>";
	header("loaction:uhome.php");
}
?>