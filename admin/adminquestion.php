<?php
	include 'utility.php';
	include 'header.html';
	require("sidenavigation.html");
?>
<!DOCTYPE html>
<html>
	<head>
    <style type="text/css">
    	
		label
		{
				color:blue;
				float:left;
		}
		input[type=text],select
		{
			margin-right:45px;
		}
		button
		{
			font-size:45px;
		}
		
		
    </style>
</head>
    	<body>
        	<center>
            	<div class="row" style="margin-top:150px;">
                	
                    <div class="col-md-offset-2 col-md-8">
                    <h1>Add Quiz</h1>
                    <form action="" method="post">
                    	
                        	<div class="form-group">
                                  		<label for="question">Ask question</label>
                     <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
                            </div>
                            &nbsp;
                     <div>
                              <label for="correct-answer">Correct answer</label>
                     <input type="text" class="form-control" id="correct-answer" name="correct-answer" placeholder="Enter correct answer here" Required>
                     
                        	</div>&nbsp;
                            
                    <div>
                              <label for="wrong-answer1">wrong answer 1</label>
                     <input type="text" class="form-control" id="wrong-answer1" name="wrong-answer1" placeholder="Enter wrong answer  1 here" Required>
                     
                        	</div>&nbsp;
                            <div>
                              <label class="sr_only" for="wrong-answer2">wrong answer 2</label>
                     <input type="text" class="form-control" id="wrong-answer2" name="wrong-answer2" placeholder="Enter wrong-answer 2 here" Required>
                     
                        	</div>&nbsp;
                            
                            <div>
                              <label for="wrong-answer3">wrong answer 3</label>
                     <input type="text" class="form-control" id="wrong-answer3" name="wrong-answer3" placeholder="Enter wrong-answer 3 here" Required>
                     
                        	</div>&nbsp;
				<div>
                <label for="subject">subject</label>
                <select name="subject" id="subject">
                
                	<option value="maths">Maths</option>
                    <option value="science">Science</option>
                
                </select>
                </div>
                
                      <br>  <br> <br>      <div>
                      <button type="submit" onClick="window.location='aa.php';" class="btn btn-primary btn-large" value="submit" name="submit" style="color:pink;background-color:black;height:60px;width:100%;">+Add Question</button>
                    </form>
                    </div>
                    
                </div>
                <?php if(isset($_POST['submit']))
						{
							$result=mysql_query("select * from quiz",$con);
							$num=mysql_num_rows($result);
						
						@$id=$num+1;
						@$que=$_POST['question'];
						@$ans=$_POST['correct-answer'];
						@$wans1=$_POST['wrong-answer1'];
						@$wans2=$_POST['wrong-answer2'];
						@$wans3=$_POST['wrong-answer3'];
						@$sub=$_POST['subject'];
					$qry="insert into quiz(id,que,option1,option2,option3,option4,ans,subject) values('$id','$que','$ans','$wans1','$wans2','$wans3','$ans','$sub');";
						
						
						$done=mysql_query($qry,$con);
						
						if($done==True)
						{
							echo "Question And Answer submitted successfully";
						}
				}
				?>
            </center>
        </body>
    </head>
</html>