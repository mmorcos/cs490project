
<?php
    
    include 'Connect.php';

            $question = $_POST["question"];
            $parameters = $_POST["parameters"];
            $methodName = $_POST["methodName"];
            $difficulty = $_POST["difficulty"];
            $category = $_POST["category"];
            
            $q_query = mysqli_query($connection, "SELECT question, category FROM QuestionBank WHERE question = '$question' AND category = '$category' "); 
            $returnCount = mysqli_num_rows($q_query);
            
               if($returnCount > 0){
                   echo "Question already exists in the database.";
               }
               else{
                  $add_question = "INSERT INTO `ac482`.`QuestionBank` (`question`, `parameters`, `methodName`, `difficulty`, `category`) VALUES ('$question',                           '$parameters', '$methodName', '$difficulty', '$category')";
                  
                  //$state = 'Stored';
                                
               }
              
                    if (mysqli_query($connection, $add_question)) {
                          echo "New record created successfully";
                    } 
                    else {
                          echo "Error: " . $add_question . "<br>" . mysqli_error($connection);
                    }
                   
                   
                         mysqli_close($connection);
?>
