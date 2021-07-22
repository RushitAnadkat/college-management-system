<?php session_start();
require("dbconfig.php"); 
?>
	<center>
        <div class="title" style="margin-top:50px;"  align="center">RPBC QUIZ</div>
        <?php 
			if(isset($_POST['click']) || isset($_GET['start']))
			{
				@$_SESSION['clicks']+=1;
				$c=$_SESSION['clicks'];
				if(isset($_POST['userans']))
				{
					$userselected=$_POST['userans'];
					$fetchqry2="update quiz set userans = $userselected where id=$c-1";
					$result2=mysql_query($fetchqry2,$con);
				}
			}
			else
			{
				$_SESSION['clicks']=0;
			}
			//echo ($_SESSION['clicks']);
		?>
        <div class="bump"><br><form>
        <?php if($_SESSION['clicks']==0)
			{
		?>	
        <button class="button" name="start">
      <span>START QUIZ</span>	
        </button>
        <?php } ?></form></div>
        <form action="" method="post">
        <table>
        <?php if(isset($c))
		{
			
			$result=mysql_query("select * from quiz where id=$c",$con);
			$num=mysql_num_rows($result);
			$row=mysql_fetch_array($result);
		}?>
		<tr><td>
		<h3><br>
		<?php echo @$row['que'];?> </h3></td>
        </tr>
        <?php if($_SESSION['clicks']==1)
		{
			?>
            <tr><td>
          <input type="radio" name="userans" value="<?php echo $row['option1'];?>" required>&nbsp;<?php echo $row['option1'];?><br></td></tr>
                 <tr><td>
          <input type="radio" name="userans" value="<?php echo $row['option2'];?>" required>&nbsp;<?php echo $row['option2'];?><br></td></tr>
                 <tr><td>
          <input type="radio" name="userans" value="<?php echo $row['option3'];?>" required>&nbsp;<?php echo $row['option3'];?><br></td></tr>
                 <tr><td>
          <input type="radio" name="userans" value="<?php echo $row['option4'];?>" required>&nbsp;<?php echo $row['option4'];?><br></td></tr>
            
            <tr>
            	<td>
                	<button class="button3" name="click">Next</button></td></tr>
                    <?php }	
					?>
                    <form>
                    <?php 
						if($_SESSION['clicks']==2)
						{
							$result3=mysql_query("select ans,userans from quiz",$con);
								$storeArry=array();
								 
								 while($row3=mysql_fetch_array($result3))
								 {
								 	if($row['ans']==$row3['userans'])
									{
									@$_SESSION['score']+=1;
									}
								}
						
					?>
                    <h2>Result</h2>
                    <span>No. of correct answer:&nbsp;
                    
                    <?php echo $no=@$_SESSION['score'];
					
					session_unset();?></span><br>
                    
                    <span>Your score:&nbsp;<?php echo $no * 2 ;?></span>
                    <?php } ?>
                    
