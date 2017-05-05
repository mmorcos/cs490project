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
            <li role="presentation"><a href="student_exam.php">Take Exam </a></li>
            <li role="presentation"><a href="view_grade.php">View Grade</a></li>
            <li role="presentation"><a href="logout.php" role="button">Logout </a> </li
          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>

      <div class="jumbotron">
     <?php 

     include_once 'student_grade.php'; 


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

    

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
