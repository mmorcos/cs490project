<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  
  . { height: 100%; padding: 0; margin: 0; width: 0%; height: 0%; float: left; }

 


</style>

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
  <script type="text/javascript">
    function preview()
    {
      if (document.getElementById('Bike').checked) {
      
        var x = document.getElementById("Bike").value;
            alert(x); 
    }
      if (document.getElementById('Car').checked){
            var y = document.getElementById("Car").value;
            alert(y);
          }
  }

  </script>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="questionform.html">Create Question</a></li>
            <li role="presentation" class="active"><a href="create_exam.php">Create Exam</a></li>
            <li role="presentation"><a href="#">Grade Exam</a></li>
            <li role="presentation"><a href="logout.php" role="button">Logout </a> </li>

          </ul>
        </nav>
        <h3 class="text-muted">Exam System</h3>
      </div>
      <div class="jumbotron">

     <!-- <table width=100% height=100%>
     <td width=50%   style="border-right: solid 1px #f00;">
        <h3>Select your exam questions</h3>

           <form action="" onclick="javascript:preview()">
            <input type="checkbox" id="Bike" name="vehicle" value="Bike">I have a bike<br>
            <input type="checkbox" id="Car" name="vehicle" value="Car">I have a car 
          </form>-->


              <form action="send_exam.php" method="POST">
              <?php 
            include_once 'recieve_exam.php';
            ?>
            <input type="text" name="examID" id="examID" class="form-control" placeholder="Enter an exam ID to save this exam" autofocus="">

      <br />

      <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button" onClick="Confirm(this.form)"> Submit</button>

    </form>
    <!--</td>

    <td width=50%> 
      <iframe src="rpane.php"></iframe>


    </td>
    </table>-->
      </div>
    </div> <!-- /container -->
<script type="text/javascript">
function Confirm(form){
alert("New question added to the bank!"); 
form.submit();
document.getElementById("question").reset();
}




</script>





  </body>
</html>
