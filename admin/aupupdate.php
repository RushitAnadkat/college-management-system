<?php 
require("utility.php");?>
<?php
$uname=$_POST['uname'];
$name=$_POST['name'];
$surname=$_POST['snm'];
$password=$_POST['pwd'];
$email=$_POST['e_mail'];
$address=$_POST['add'];
$mobile=$_POST['mobile'];

$sql="update users set username='$uname',name='$name',surname='$surname',password='$password',email='$email',address='$address',mobile='$mobile' where user_id=1 ";

$result=ExecuteNonQuery($sql);

if($result)
{
	header("location:apupdate.php");
}
else
{
	echo " sorry can't update record ....";
}


?>