<?php //session_start();
	include("utility.php");
	$head=$_POST[ata];
	$desc=$_POST[ata2];
	$uid=1; //$_SESSION[uid];
	$sql="INSERT into question (heading,question_detail,user_id) values ('$head','$desc',1)";
	$result=ExecuteNonQuery($sql);
	if($result)
	{
		header("location:uhome.php");
	}
	else
	{
		echo "<script>alert('Sorry,\n Something Went Wrong,\nPlz Try again....');</script>";
		header("loaction:uhome.php");
	}
?>