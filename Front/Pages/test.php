<style type="text/css">
  

  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.main-content{
    width: 50%;
    float: left;
}
.aside{
    width: 50%;
    float: left;    
}
.wrapper, html, body{
    height: 100%;
}

</style>


<!DOCTYPE html>

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
  </head>
<html lang="en">
<body>
    <div class="wrapper">  <!-- for reasons -->
                <!-- your main stuff here -->

        <div class="main-content">
          <body>
    <div class="container">
      <div class="header clearfix">
  
        <h3 class="text-muted">Select Questions</h3>
      </div>
      <div class="jumbotron">



<script type="text/javascript">
  function moveQuestion()
  {

  }

</script>

              <form action="send_examTest.php" method="POST">
              <?php 
            include_once 'recieve_exam.php';
            ?>

                <input type="text" name="examID" id="examID" class="form-control" placeholder="Enter an exam ID to save this exam" autofocus="">
      <br />
      <input type="button" value="Update Preview" id="btntest" />
      <br />
      <br />
      <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button" onClick="Confirm(this.form)"> Submit</button>

<!--
      <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button" onClick="Confirm(this.form)"> Submit</button> -->

    </form>




    <script type="text/javascript"><!--
// Returns an array with values of the selected (checked) checkboxes in "frm"
function getSelectedChbox(frm) {
  var selchbox = [];        // array that will store the value of selected checkboxes
  var pointvals = [];
  // gets all the input tags in frm, and their number
  var inpfields = frm.getElementsByTagName('input');
  var nr_inpfields = inpfields.length;
  var z=1; 

  // traverse the inpfields elements, and adds the value of selected (checked) checkbox in selchbox
  for(var i=0; i<nr_inpfields; i++) {
    if(inpfields[i].type == 'checkbox' && inpfields[i].checked == true){ 
      selchbox.push(z + ")");
      selchbox.push(inpfields[i].value);
      selchbox.join(" ");
      selchbox.push("<br />");
      selchbox.push("<br />");
     // inpfields[i].type == 'text'
    }
    if(inpfields[i].type == 'text')
    {
      //pointvals.push(inpfields[i].value);
      //selchbox.push(inpfields[i].value);
      //console.log(selchbox);
    }
    z++; 
  }

  return selchbox;
  return pointvals; 
}

  /* Test this function */
// When click on #btntest, alert the selected values
document.getElementById('btntest').onclick = function(){
  var selchb = getSelectedChbox(this.form) + "<br />";     // gets the array returned by getSelectedChbox()
 // var x = document.getElementsByTagName("input");
 for (var i=0; i<selchb.length; i++){
  document.getElementById("demo").innerHTML = selchb; //this should put everything checked into the preview window
  scroll(0,0);
  }

//console.log(selchb.join('\r\n'));
}
//-->
</script>




    <!--</td>

    <td width=50%> 
      <iframe src="rpane.php"></iframe>


    </td>
    </table>-->
      </div>
    </div> <!-- /container -->
<!--<script type="text/javascript">
function Confirm(form){
alert("New question added to the bank!"); 
form.submit();
document.getElementById("question").reset();
}
 -->
</script>
        </div>
        <div class="aside">
            <!-- your not so main stuff here -->






 <div class="main-content">
          <body>
    <div class="container">
      <div class="header clearfix">
  
        <h3 class="text-muted">Exam Preview</h3>
      </div>
      <div class="jumbotron">

     <!-- <table width=100% height=100%>
     <td width=50%   style="border-right: solid 1px #f00;">
        <h3>Select your exam questions</h3>

           <form action="" onclick="javascript:preview()">
            <input type="checkbox" id="Bike" name="vehicle" value="Bike">I have a bike<br>
            <input type="checkbox" id="Car" name="vehicle" value="Car">I have a car 
          </form>-->


<script type="text/javascript">
  function moveQuestion()
  {

  }

</script>


            <p id="demo">

            </p>

      <br />

<!--
      <button class="btn btn-lg btn-success" name="Submit" type="submit" role="button" onClick="Confirm(this.form)"> Submit</button> -->

    </form>



    <!--</td>

    <td width=50%> 
      <iframe src="rpane.php"></iframe>


    </td>
    </table>-->
      </div>
    </div> <!-- /container -->
<!--<script type="text/javascript">
function Confirm(form){
alert("New question added to the bank!"); 
form.submit();
document.getElementById("question").reset();
}
 -->
</script>







        </div>
    </div>
</body>
</html>
