
<?php
    
  include 'Connect.php';
  
  

  $getExam = "SELECT examquestion FROM Exam";
  
  $result = mysqli_query($connection, $getExam);

/*
      while($row = mysqli_fetch_assoc($result)){

          $fields[] = $row['question'];
      }
  */
  
  
 $exam = array();

// look through query
while($row = mysqli_fetch_assoc($result)){

  // add each row returned into an array
  $exam[] = $row;

}    
  
session_start();
$_SESSION['exam'] = $exam;
     
      mysqli_close($connection);
?>
