<?php
    
    include 'Connect.php';

           $examID = $_POST['examID'];
           $q = $_POST['q'];
           echo $examID;
           
            echo "this is the print from test.php";
print_r($q);
                  
          $select = array();
foreach($q as $key => $selected){
    $select[$key] = $selected;
}
            $e_query = mysqli_query($connection, "SELECT examquestion, examid FROM Exam WHERE examquestion = '$q' AND examid = '$examID' "); 
            $returnCount = mysqli_num_rows($e_query);           
               if($returnCount > 0) {
                   echo "The exam question: $q is already within exam $examID";
               }
               else {
                       $add_exam = "INSERT INTO `ac482`.`Exam` (`examquestion`, `examid`) VALUES (' $select[$key]', '$examID')";
               }
                    if (mysqli_query($connection, $add_exam)) {                   
                          $success = "New exam submitted successfully.";
                          echo json_encode($success);                         
                    } 
                    else {                    
                          echo "Error: " . $add_exam . "<br>" . mysqli_error($connection);     
                    }         
                   mysqli_close($connection);
                         
?>