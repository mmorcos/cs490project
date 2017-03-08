
<?php
    
  include 'Connect.php';
  
  
  
  $getQuestions = "SELECT question FROM QuestionBank";
  
  $result = mysqli_query($connection, $getQuestions);


      while($row = mysqli_fetch_assoc($result))
      {
      	$fields[] = $row['question'];
    

 	  	}

     
      mysqli_close($connection);
?>
