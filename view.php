<?php
include('header.html');
require('utility.php');

$result=ExecuteQuery("select * from quiz");
?>
<?php
	
if(mysql_num_rows($result)>=1)
{
	
	while($row=mysql_fetch_array($result))
	{
		
		echo "<h2 style='color:violet;margin-top:180px'>&nbsp;Question:</h2>";
		echo "<h1 style='color:blue;'>".$row["id"]."&nbsp;&nbsp;".$row["que"]."</h1>&nbsp;&nbsp;&nbsp;";
		
		if($row["option1"]==$row["ans"])
		{
			echo "<h1 style='color:green'>".$row["option1"];
		}
		else
		{
			echo "<h1 style='color:red'>".$row["option1"];
		}
		if($row["option2"]==$row["ans"])
		{
			echo "<h1 style='color:green'>".$row["option2"];
		}
		else
		{
			echo "<h1 style='color:red'>".$row["option2"];
		}
		if($row["option3"]==$row["ans"])
		{
			echo "<h1 style='color:green'>".$row["option3"];
		}
		else
		{
			echo "<h1 style='color:red'>".$row["option3"];
		}
		if($row["option4"]==$row["ans"])
		{
			echo "<h1 style='color:green'>".$row["option4"];
		}
		else
		{
			echo "<h1 style='color:red'>".$row["option4"];
		}


	}
}
?>