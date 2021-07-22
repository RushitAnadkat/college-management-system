<?php
require("utility.php");
require("sidenavigation.html");
?>
<script type="text/javascript">
	
		function check(form1)
		{
				 if(form1.uname.value=="")
				{
					document.getElementById("a").innerHTML="Please, Enter Username.";
					//alert("please enter the Username");
					form1.uname.focus();
					return false;
				}
				
				 else if(form1.name.value=="")
				{
					document.getElementById("b").innerHTML="Please, Enter name.";
					//alert("please enter the username");
					
					form1.name.focus();
					return false;
				}
				 else if(form1.snm.value=="")
				{
					document.getElementById("r").innerHTML="Please, Enter sur name.";
					//alert("please enter the username");
					
					form1.snm.focus();
					return false;
				}
				else if(form1.pwd.value=="")
				{
					document.getElementById("c").innerHTML="Please, Enter password.";
					//alert("please enter the Fullname");
					form1.pwd.focus();
					return false;
				}
				else if(form1.e_mail.value=="")
				{
					document.getElementById("d").innerHTML="Please,Enter Email.";
					//alert("please enter the Fullname");
					form1.e_mail.focus();
					return false;
				}
				else if(form1.mobile.value=="")
				{
					document.getElementById("e").innerHTML="Please,enter mobile no.";
					//alert("please enter the Fullname");
					form1.mobile.focus();
					return false;
				}
				else if(form1.add.value=="")
				{
					document.getElementById("i").innerHTML="Please, Enter address.";
					//alert("please enter the Fullname");
					form1.add.focus();
					return false;
				}
				else
					return true;
			
	}
</script>

<form action="aupupdate.php" method="post" onSubmit="return check(this)" >
<?php
	$sql="select * from users where user_id=1";
	
	$rows=ExecuteQuery($sql);
	echo "<div style='margin-left:300px; margin-top:60px'>";
	echo "<h1>Profile</h1>";
	if(mysql_num_rows($rows)>0)
	{
		
		$row=mysql_fetch_array($rows);
		echo "<table>";
		echo "<tr id='aa'><td>User name</td><td>: </td><td><input type='text' name='uname' value='$row[username]'/><span id='a' style='color:red';/></span></td></tr>";
		
		echo "<tr><td>name</td><td>: </td><td><input type='text' name='name' value='$row[name]'/><span id='b' style='color:red';/></span></td></tr>";
		
		echo "<tr><td>surname</td><td>: </td><td><input type='text' name='snm' value='$row[surname]'/><span id='r' style='color:red';/></span></td></tr>";
		
		echo "<tr><td>password</td><td>: </td><td><input type='text' name='pwd' value='$row[password]'/><span id='c' style='color:red';/></span></td></tr>";
		
		echo "<tr><td>E-mail</td><td>: </td><td><input type='text' name='e_mail' value='$row[email]'/><span id='d' style='color:red';/></span></td></tr>";
				
	
			echo "<tr><td>Address</td><td>: </td><td><textarea rows='3' cols='15' name='add' value='$row[address]'/></textarea><span id='i' style='color:red';/></span></td></tr>";
				
				
				       echo"<tr><td>mobile</td><td>:</td><td><input type='text'  name='mobile'  value='$row[mobile]'><span id='e' style='color:red';/></span><br>";
	
			echo "<input type='submit' value='update'>";
		echo"<input type='reset' value='Reset'>";		
			echo "</table>";
    
	}
?>	
</form>
