<?php
require("utility.php");
	echo "<h1>USers </h1>";
	$sql="select * from users";
	$rows=ExecuteQuery($sql);
	echo "<table>";
	echo "<tr><th>Id</th><th>Name</th><th>Surname</th><th>Username</th><th>Email</th><Enroll no.</th><th>Mobile No.</th><Th>Edit</th><th>Delete</th></tr>";
	for($row=mysql_fetch_array($rows))
	{
		echo "<tr><td>$row['user_id']</td><td>$row['name']</td><td>$row['surname']</td><td>$row['username']</td><td>$row['email']</td><td>$row['enroll']</td><td>$row['mobile']</td><td><a href='Edit.php'>Edit</td><td><a href='Edit.php'>Delete</td></tr>";
	}
	echo "</table>";
	?>
	