<?php
        include_once 'questionretrieve.php';



        $q1 = "Q1: ";
        $q2 = "Q2: "; 
        $q3 = "Q3: ";
        $q4 = "Q4: "; 
        $q5 = "Q5: ";






          /*$url = 'https://web.njit.edu/~ac482/CS490/questionretrieve.php';
          //open connection
          $ch = curl_init();

          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
          curl_setopt($ch,CURLOPT_POST, count($fields));
          curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
          $output = curl_exec($ch);  


          //execute post
          $result = curl_exec($ch);
          curl_close($ch);
          var_dump($output);
*/
  


      ?> 

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

    <title> Add Exam Questions</title>

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
            <li role="presentation"><a href="#">Create Exam</a></li>
            <li role="presentation"><a href="#">Grade Exam</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>

      <div class="jumbotron">
        <h3>Select your exam questions</h3>
          
              <form action="send_exam.php" method="POST">

          <input type="checkbox" id="q1" name="q[]"> <?php echo $q1 . $fields[0] . "<br /> \n"; ?><br>
          <input type="checkbox" id="q2" name="q[]"> <?php echo $q2 . $fields[1] . "<br /> \n"; ?><br>
          <input type="checkbox" id="q3" name="q[]"> <?php echo $q3 . $fields[2] . "<br /> \n"; ?><br>
          <input type="checkbox" id="q4" name="q[]"> <?php echo $q4 . $fields[3] . "<br /> \n"; ?><br>
          <input type="checkbox" id="q5" name="q[]"> <?php echo $q4 . $fields[4] . "<br /> \n"; ?><br>
          <input type="checkbox" id="q6" name="q[]"> <?php echo $q5 . $fields[5] . "<br /> \n"; ?><br>
      <label for="version">Select Version</label>
        <select name="version">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
      </select>
      <br />

      <button class="btn btn-lg btn-success" type="submit" role="button"> Submit</button>
    
    </form>

          </form>
      </div>
        


    </div> <!-- /container -->



  </body>
</html>
