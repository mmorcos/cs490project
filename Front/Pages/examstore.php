
<?php
    
    include 'Connect.php';

            $examquestion = $_POST["examquestion"];
            $examid = $_POST["examid"];
            
            $e_query = mysqli_query($connection, "SELECT examquestion, examid FROM Exam WHERE examquestion = '$examquestion' AND examid = '$examid' "); 
            $returnCount = mysqli_num_rows($e_query);
            
               if($returnCount > 0){
                   echo "The exam question $examquestion is already within exam $examid";
               }
               else{
                  $add_exam = "INSERT INTO `ac482`.`Exam` (`examquestion`, `category`) VALUES ('$examquestion', '$examid')";
                  
                  //$state = 'Stored';
                                
               }
              
                    if (mysqli_query($connection, $add_exam)) {
                          echo "New record created successfully";
                    } 
                    else {
                          echo "Error: " . $add_question . "<br>" . mysqli_error($connection);
                    }
                    
                    
                   
                   
                         mysqli_close($connection);
?>
