
<?php
    //include 'Connect.php';
    /*
   $connection = mysqli_connect("sql1.njit.edu","ac482","Z498qJCz");
        if(!$connection) {
            die("Couldn't connect to SQL server.");
        }
        */
   $connection = mysqli_connect("127.0.0.1:8889","root","root");
        if(!$connection) {
            die("Couldn't connect to SQL server.");
        }
   $SQLdb = mysqli_select_db($connection, "mysql");
        if(!$SQLdb) {
            die("Couldn't open the database");
        }

            $username = $_POST["username"];
            $password = $_POST["password"];
   
            $sql_queryStudent = mysqli_query($connection, "SELECT username, password FROM Students WHERE username = '$username' AND password = '$password' "); 
            $returnCount = mysqli_num_rows($sql_queryStudent);
            
                 
            $sql_queryProf = mysqli_query($connection, "SELECT username, password FROM Instructor WHERE username = '$username' AND password = '$password' ");
            $returnCount2 = mysqli_num_rows($sql_queryProf);
            
                if($returnCount > 0 ) {
                    echo 'Login successful. Welcome Student.';
                    $userType = 'Student';
                    echo $username;
                    //echo "hello";
                    
                }                           
                
                elseif($returnCount2 > 0 ) {
                    echo "<br/>\n", 'Login successful. Welcome Professor.';
                    //echo $returnCount2;
                    $userType = 'Instructor';
                }
                
                else {      
                    
                    echo "<br/>\n", 'Invalid Login';
                 }
        
                        mysqli_close($connection);
?>
