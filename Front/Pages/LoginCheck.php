
<?php
    
    include 'Connect.php';

    $request = file_get_contents('php://input');
    $recieve = json_decode($request);
    
    //$User = $recieve->username;
    $Pass = $recieve->Password;
    $Check = $recieve->Check;

     echo "hello motherfucking world";
    $string = json_decode(file_get_contents("php://input"), true);
    $username = $string["username"];
    $password = md5($string["password"]);
         

    echo var_dump($password);
            $sql_queryStudent = mysqli_query($connection, "SELECT * FROM Students WHERE username = '$username'");
            $returnCount = mysqli_num_rows($sql_queryStudent);
            
                 
            $sql_queryProf = mysqli_query($connection, "SELECT * FROM Instructor WHERE username = '$username'");
            $returnCount2 = mysqli_num_rows($sql_queryProf);
            
                if($returnCount > 0 ) {
                    echo "<br/>\n", 'Login successful. Welcome Student.';
                    echo $username; 
                    //echo $password;
                }                           
                
                elseif($returnCount2 > 0 ) {
                    echo "<br/>\n", 'Login successful. Welcome Professor.';
                }
                
                else {      
                    
                    echo "<br/>\n", 'Invalid login credentials';
                 }
        
                        mysqli_close($connection);
?>
