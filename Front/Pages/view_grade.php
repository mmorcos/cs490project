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
            <li role="presentation" class="active"><a href="view_grade.php">View Grade</a></li>
            <li role="presentation"><a href="logout.php" role="button">Logout </a> </li
          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>

      <div class="jumbotron">
     <?php 

     //include_once 'student_grade.php'; 

     $url = 'https://web.njit.edu/~ac482/CS490/retrieveupdatedgrade.php';
          //open connection
          $ch = curl_init();
          $fields = $count; 
         // echo $count; 
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
      rtrim($fields, '&');
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

          //execute post
          $summary = curl_exec($ch); 
          curl_close($ch);
          $summary = json_decode($summary, true); 

          $count = 0; 
          if (sizeof($summary)!=0)
          {

            foreach ($summary as $key => $value) 
            {
                foreach($value[0] as $questionKey => $questionValue)
                  {
                    echo "Question ". $questionKey . ": ". $questionValue;
                    echo "<br />";
                    echo "<br>";
                  }
                foreach ($value[1] as $answerKey => $answerValue) 
                {
                  echo "Answer " . $answerKey. ": " . "<code style='color:orange'>".  $answerValue . "</code>";
                  echo "<br />"; 
                  echo "<br>";
                }
                foreach ($value[2] as $questionScoreKey => $questionScoreValue) 
                {
                  $questionScoreKey +=1; 
                  echo "You recieved " . $questionScoreValue . " points ". " on question " . $questionScoreKey;
                  echo "<br>";
                  echo "<br>";

                }
               foreach ($value[3] as $compileStatusKey => $compileStatusValue)
                  {
                    echo $compileStatusValue; 
                    echo "<br>";
                    echo "<br>";
                  }

               foreach ($value[4] as $compileGradeKey => $compileGradeValue)
                  {
                    $compileGradeKey+=1; 

                    echo "For question " . $compileGradeKey . $compileGradeValue; 
                    echo "<br>";
                    echo "<br>";

                  }

               foreach ($value[5] as $caseStatusKey => $caseStatusValue)
                {
                  $caseStatusKey+=1; 
                  echo "For question " . $caseStatusKey . $caseStatusValue; 
                  echo "test";
                  echo "<br>";
                }
               foreach ($value[6] as $parenBracketStatusKey => $parenBracketStatusValue)
                {
                  $parenBracketStatusKey+=1; 
                  echo "For question " . $parenBracketStatusKey .$parenBracketStatusValue; 
                  echo "<br>";
                  echo "<br>";
                }
                foreach ($value[7] as $parenBracketGradeKey => $parenBracketGradeValue)
                {
                  echo $parenBracketGradeValue; 
                  echo "<br>";
                  echo "<br>";
                }

            }

            echo "Final Grade:  " . $value[9] . "%";
            echo "<br>";
            echo "<br>";
            echo "<br>";
;
            echo "Comments from your caring professor: " . "<br>" . $value[10]; 

          }
          else
          {
            echo "Your professor hasn't released your grade yet. Please check back later.";

              foreach ($_POST as $key => $value)
              {
                echo $value; 
              }

          }





     ?>

     <!-- <br />
      <br />
      <form method="POST" action="pfview.html">
           <textarea id="feedback" name="feedback" rows="7" cols="70" placeholder="Enter Feedback here"></textarea>
      <br>
      <br>
      <label>Enter the student's updated Grade</label>
      <br>
      <input type="text" name="updatedGrade" id="updatedGrade">
      <br> 
      <br> 
       <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button"> Submit</button>
      </form>
      </div>-->

    

    </div> <!-- /container -->



  </body>
</html>
