<?php 
          $url = 'https://web.njit.edu/~st456/retrieve.php';
          //open connection
          $ch = curl_init();

          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
          
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


          //execute post
          $exquest = curl_exec($ch); 
          curl_close($ch);
          $exquest = json_decode($exquest, true); 
          
          $numOfQuests = $exquest["questcount"]; 

          for ($i=0; $i<$numOfQuests; $i++) 
          {
          	echo "<input type='checkbox' name='q[]' id='q[]' value='";
               echo "for loop is working";
          	echo $exquest['question$i'];
               echo "'> ";
               echo $exquest["question$i"]; 
			echo "<br /><br />";          	
          }         


?>