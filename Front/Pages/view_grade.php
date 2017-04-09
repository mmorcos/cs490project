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

    <title>Student View</title>

    <link href="../CSS/BootstrapCSS/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="student_exam.php">Take Exam </a></li>
            <li role="presentation"><a href="#">View Grade</a></li>
            <li role="presentation"><a href="logout.php" role="button">Logout </a> </li>

          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>

      <div class="jumbotron">
        <?php 
        $grade=0;
        echo "You scored a: "; 
        echo $grade; 

        ?>


      </div>

    

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>