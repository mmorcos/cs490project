<?php 
  //****************************************** cURL nonsense goes here **********************************************************
  /*$url = "web.njit.edu/~st456/index.php";
  fields = array('action' => $action, 'type' => $type); 
  foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&';}  // URL-ify DATA FOR the POST.
   rtrim($fields_string, '&');

   $ch = curl_init(); 
  curl_setopt($ch,CURLOPT_URL, $url);                                         // SET URL FOR OUTSIDE PHP FILE.
   curl_setopt($ch,CURLOPT_POST, count($fields));                              // SET # OF POST VARIABLES.
   curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);                        // SET POST DATA.
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                             // SET result <- cURL Output.
   $result = curl_exec($ch);                                                   // EXECUTE cURL SESSION.
   curl_close($ch);        
   
//*******************************************************************************************************************************


  //********************************************** Init Vals ********************************************************************
  $quest = array();
  index = 0; 
  $delimiter = "##"; //maybe change this later? 
  $tokens = strtok($result, $delimeiter); 
//*******************************************************************************************************************************
//************************************************ Doing Some Stuff Now *********************************************************
  while ($tokens !== false)
  {
      $quest[$index] = $tokens;
      $tokens = strtok($delimeter); 
      index++; 
  }
  */
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <style> 
        iframe{
        display:inline-block;
          }
      </style>
      <script> 

      var e = "<?php 
        for ($i = 0; $i < $index-1; $i++) 
        {
             echo preg_replace("/\r?\n/", "\\n", addslashes($quest[$i])); 
             echo ":";
        }
        ?>"
        
      var f = e.split(":");
        function getQuestions()
        {
          var i; 
          var output=''; 
          output = output +'<form action="placeholder.php id="questions">'; //placeholder and id="questions" NEEDS to match n middle.php
          for (i=0; i< f.length-1; i++)
          {
            output = output + '<fieldset> <input type="radio" name="question" value="'+f[i]+'">;'+f[i]+'</fieldset><br />';
            output = output + '</form>';
            document.getElementByID("bank").innerHTML = output; 
          }
        }
      </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Exam Creation</title>

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
      
      <!--
      <iframe src="pfview.html" height="500" width="325"></iframe>
      <iframe src="pfview.html" height="500" width="325"></iframe>
      -->
    

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
