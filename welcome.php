<?php
$sql="Select * from users where user_id=1";
$rows=ExecuteQuery($sql);
$row=mysql_fetch_array($rows);
echo "<div id='UserName12' style='float:right; margin-top:-24px; margin-right:10px;'>Welcome <a href='uedit.php' style='text-decoration:none; color:skyblue'><span id='user1' style='font-weigth:bolder; font-size:20px;'>$row[name] $row[surname]</span></a></div>";
echo "<hr style='margin-top:180px;'>";
?>