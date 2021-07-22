<?php
	include('header.html');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
        		body
				{
					
					background-repeat:no-repeat;
					background-attachment:fixed;
				}
				/*button*/
				.button
				{
					display:inline-block;
					border-radius:4px;
					background-color:#f4511e;
					border:none;
					color:#ffffff;
					text-align:center;
					font-size:28px;
					padding:20px;
					width:500px;
					transition:all 0.5s;
					cursor:pointer;
					
				}
				.button span
				{	
					cursor:pointer;
					display:inline-block;
					position:relative;
					transition:0.5s;
				}
				.button span:after
				{
					content:'\00bb';
					position:absolute;
					opacity:0;
					top:0;
					right:-20px;
					transition:0.5s;
				}
				.button hover span
				{
					padding-right:25px;
				}
				.button hover span:after
				{	
					opacity:1;
					right:0;
				}
				.title
				{
					background-color:#ccc11e;
					font-size:28px;
					padding:20px;
				}
				.button3
				{
					border:none;
					color:white;
					padding:10px 32px;
					text-align:center;
					text-decoration:none;
					display:inline-block;
					font-size:16px;
					
					-webkit-transition-duration:0.4s;
					cursor:pointer;
					transition-duration:0.4s;
				}
				.button s
				{
					background-color:white;
					color:black;
					border:2px solid #f4e542;
				}
				.button3:hover
				{
					background-color:#f4e542;
					color:black;
				}
        </style>
        

<body>

<a href="questionBAnk.php" class="button" onclick="redirect()" style="height:30px;width:30px;font-size:20px;float:left;margin-top:100px;">Maths</a>
                    
                    <script type="text/javascript">
					function redirect()
					{	
						if(window.confirm('Really go to another page you cannot comeback?'))
						{		
								window.location.href="questionBAnk.php";						
						}
						
					}
                    </script><br /><br /><br /><br />
<a href="questionBAnk2.php" class="button" onclick="redirect()" style="height:30px;width:30px;font-size:15px;margin-left:-70px;float:left;margin-top:200px;">Science</a>
                    
                    <script type="text/javascript">
					function redirect()
					{	
						if(window.confirm('Really go to another page you cannot comeback?'))
						{		
								window.location.href="questionBAnk2.php";						
						}
						
					}
                    </script>

			<div style="float:right;margin-right:100px;margin-top:130px;">
            		<h1>Instructions</h1>
                    
                    <h3><b>1.there are only 5 question</b></h3>
                    <h3><b>2.you must try to attend all</b></h3>
                    <h3><b>3.try to ignore to click view solution page without attending question</b></h3>
            </div>
</body>
</html>
