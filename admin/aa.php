<?php
require("utility.php");

$result=ExecuteQuery("select * from quiz");

if(mysql_num_rows($result)>=1)
{
	
	while($row=mysql_fetch_array($result))
	{
		
		echo "<h2 style='color:violet;'>&nbsp;Question:</h2>";
		echo "<h1 style='color:red;'>".$row["id"]."&nbsp;&nbsp;".$row["que"]."</h1>&nbsp;&nbsp;&nbsp;";
	echo "<h3 style='color:green;'>Option 1"."&nbsp;&nbsp;&nbsp;".$row["option1"]."</h3>";
	echo "<h3 style='color:blue;'>Option 2"."&nbsp;&nbsp;&nbsp;".$row["option2"]."</h3>";
	echo "<h3 style='color:grey;'>Option 3"."&nbsp;&nbsp;&nbsp;".$row["option3"]."</h3>";
echo "<h3 style='color:skyblue;'>Option 4"."&nbsp;&nbsp;&nbsp;".$row["option4"]."</h3>";

echo "<br><br><h2 style='color:orange;background-color:blue;display:block;margin-left:100px;margin-right:100px;margin-top:0px;margin-down:0px;text-align:center'>Answer:"."&nbsp;&nbsp;&nbsp;".$row["ans"]."&nbsp;&nbsp;&nbsp;</h2>";	
	}
}
else
{
	echo " 0 results ";
}

?>