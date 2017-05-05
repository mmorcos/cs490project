<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../CSS/BootstrapCSS/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../CSS/viewportCSS/ie10-viewport-bug-workaround.css">
   <!--  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="../CSS/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Create Question</a></li>
            <li role="presentation"><a href="create_exam.php">Create Exam</a></li>
            <li role="presentation"><a href="#">Grade Exam</a></li>
            <li role="presentation"><a href="logout.php" role="button">Logout </a> </li>

          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>

      <div class="jumbotron">

      <form method="POST" action="send_updated_grade.php">


 <?php 
          $url = 'https://web.njit.edu/~ac482/CS490/graderetrieve.php';
          //open connection
          $ch = curl_init();
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
          
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
          //execute post
          $summary = curl_exec($ch); 
          curl_close($ch);
          $summary = json_decode($summary, true); 




            foreach ($summary as $key => $value) 
            {
                 foreach($value[0] as $preQuestionKey => $preQuestionValue)
                  {
                     foreach ($preQuestionValue as $questionKey => $questionValue)
                     {

                      echo "Question ". $questionKey . ": ". $questionValue;
                      echo "<input type='hidden' id='question[]' name='question[]' value='$questionValue'>";
                      echo "<br>";
                      echo "<input type='text' id='questionGrade[]' name='questoinGrade[]' placeholder='Enter Updated Grade'>";
                      echo "<br />";
                      echo "<br />";

                     }

                  }
                  foreach ($value[1] as $preAnswerKey => $preAnswerValue) 
                  {
                    foreach ($preAnswerValue as $answerKey => $answerValue) 
                    {
                    echo "Answer " . $answerKey. ": " . "<code style='color:black'>".  $answerValue . "</code>";
                    echo "<input type='hidden' id='answer[]' name='answer[]' value='$answerValue'>";
                    echo "<br />";
                    echo "<br />";

                    }
                  

                  }
                  foreach ($value[2] as $preQuestionScoreKey => $preQuestionScoreValue)
                  {
                    foreach ($preQuestionScoreValue as $questionScoreKey => $questionScoreValue)
                      {
                        echo "Question " . $questionScoreKey . " was worth " . $questionScoreValue . " points.";
                        echo "<input type='hidden' id='questionScore[]' name='questionScore[]' value='$questionScoreValue'>";
                        echo "<br />"; 
                        echo "<br />"; 
                      }

                  }



                  foreach ($value[3] as $preCompileStatusKey => $preCompileStatusValue) 
                  {
                    foreach ($preCompileStatusValue as $compileStatuskey => $compileStatusValue)
                    {
                      echo $compileStatusValue;
                      echo "<input type='hidden' id='compileStatus[]' name='compileStatus[]' value='$compileStatusValue'>";
                      echo "<br />";
                      echo "<br />";
                    }
                  }

                  foreach ($value[4] as $preCompileGradeKey => $preCompileGradeValue) 
                  {
                    foreach ($preCompileGradeValue as $compileGradeKey => $compileGradeValue) 
                    {
                      echo $compileGradeValue;
                      echo "<input type='hidden' id='compileGrade[]' name='compileGrade[]' value='$compileGradeValue'>";
                      echo "<br />";
                      echo "<br />";

                    }

                  }

                  foreach ($value[5] as $preCaseStatusKey => $preCaseStatusValue) 
                  {
                    foreach ($preCaseStatusValue as $caseStatusKey => $caseStatusValue) 
                    {
                      echo $caseStatusValue; 
                      echo "<input type='hidden' id='caseStatus[]' name='caseStatus[]' value='$caseStatusValue'>";
                      echo "<br />";
                      echo "<br />";
                    }

                  }

                  foreach ($value[6] as $preCaseGradeKey => $preCaseGradeValue)
                  {
                    foreach ($preCaseGradeValue as $caseGradeKey => $caseGradeValue)
                    {
                      echo $caseGradeValue;
                      echo "<input type='hidden' id='caseGrade[]' name='caseGrade[]' value='$caseGradeValue'>";
                      echo "<br />";
                      echo "<br />";
                    }
                  }
                  foreach ($value[7] as $preParenBracketKey => $preParenBracketValue) 
                  {
                    foreach ($preParenBracketValue as $parenBracketKey => $parenBracketValue)
                    {
                      echo $parenBracketValue;
                      echo "<input type='hidden' id='parenBracket[]' name='parenBracket[]' value='$parenBracketValue'>";
                      echo "<br />";
                      echo "<br />";
                    }
                  }

                  foreach ($value[8] as $preBracketKey => $preBracketValue)
                  {
                    foreach ($preBracketValue as $bracketKey => $bracketValue) 
                    {
                      echo $bracketValue; 
                      echo "<input type='hidden' id='bracketGrade[]' name='bracketGrade[]' value='$bracketValue'>";
                      echo "<br />";
                      echo "<br />";

                    }
                  }

                  foreach ($value[9] as $gradeKey => $gradeValue)
                    {
                      echo "The student's total grade is: " . $gradeValue . "%"; 
                      echo "<input type='hidden' id='grade[]' name='grade[]' value='$gradeValue'>";
                    }


          }
       ?> 

       <br> 
       <br>

           <textarea id="feedback" name="feedback" rows="7" cols="70" placeholder="Enter Feedback here"></textarea>
      <br>
      <br>
    <!--    <label>Enter the student's updated total grade</label>
      <br>
     <input type="text" name="finalGrade" id="finalGrade"> -->
      <br> 
      <br> 
       <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button"> Release</button>
      </form>
      </div>

    

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>