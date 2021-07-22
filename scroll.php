<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	body
	{
		font-family:Arial, Helvetica, sans-serif;
		font-size:20px;
	}
	#myBtn
	{
		display:none;
		position:fixed;
		bottom:20px;
		right:30px;
		font-size:18px;
		border:none;
		outline:none;
		background-color:red;
		color:white;
		cursor:pointer;
		padding:15px;
		border-radius:4px;
	}
	#myBtn:hover
	{
		background-color:#555;
	}
</style>
</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to Top">^</button>

<script>
		window.onscroll=function(){scrollFunction()};
	function scrollFunction()
	{
		if(document.body.scrollTop>20 || document.documentElement.scrollTop>20)
		{
			document.getElementById("myBtn").style.display="block";
		}
		else
		{
			document.getElementById("myBtn").style.display="none";
		}
	}
	function topFunction()
	{
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}
</script>

</body>
</html>
