<?php
 //session_start();  
    include 'Connect.php';
     
     

            $username = $_POST["username"];
            $password = $_POST["password"];
            
   
            $sql_queryStudent = mysqli_query($connection, "SELECT username, password FROM Students WHERE username = '$username' AND password = '$password' "); 
            $returnCount = mysqli_num_rows($sql_queryStudent);
            
                 
            $sql_queryProf = mysqli_query($connection, "SELECT username, password FROM Instructor WHERE username = '$username' AND password = '$password' ");
            $returnCount2 = mysqli_num_rows($sql_queryProf);
            
                if($returnCount > 0 ) {
                    //echo "<br/>\n", 'Student';
                   //echo "Student";
                 $userType = "Student";
                 echo json_encode($userType);
                   
                }                           
                
                elseif($returnCount2 > 0 ) {
                    //echo "<br/>\n", 'Professor';
                    // echo "Professor";
                     $userType = "Professor";
                 echo json_encode($userType);
                     
                                       
                }
                
                else {      
                    
                    echo "<br/>\n", 'Invalid Login';
                 }
           
                 
        
                        mysqli_close($connection);
?>
