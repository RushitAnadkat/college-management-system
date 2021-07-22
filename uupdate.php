<?php 
require("utility.php");
?>
<?php
$uname=$_POST['un'];
$name=$_POST['fn'];
$surname=$_POST['snm'];
$password=$_POST['pwd'];
$enroll=$_POST['enroll'];
$email=$_POST['e_mail'];
$address=$_POST['add'];
$mobile=$_POST['mobile'];

$sql="update users set username='$uname',name='$name',surname='$surname',password='$password',enroll='$enroll',email='$email',address='$address',mobile='$mobile' where user_id=1 ";

$result=ExecuteNonQuery($sql);

if($result)
{
	header("location:upupdate.php");
}
else
{
	echo " sorry can't update record ....";
}


?>