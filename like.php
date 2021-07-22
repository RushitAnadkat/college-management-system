<?php
	include("utility.php");
	$upd="Update answer set likes=likes+1 where answer_id=$_GET[qid]";
	$res=ExecuteQuery($upd);
	
?>