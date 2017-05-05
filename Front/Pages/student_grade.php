<?php 

     $url = 'https://web.njit.edu/~ac482/CS490/grading.php';
          //open connection
          $ch = curl_init();
          $fields = $count; 
         // echo $count; 
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
      rtrim($fields, '&');
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

          //execute post
          $summary = curl_exec($ch); 
          curl_close($ch);
          $summary = json_decode($summary, true); 

          if (isset($summary))
          {

            foreach ($summary as $key => $value) 
            {
                foreach($value[0] as $key => $correctAnswer)
                  {
                    echo "<code style='color:green'>" . $correctAnswer . "</code>";
                    echo "<br />";
                  }
                foreach ($value[1] as $incorrectKey => $incorrectAnswer) 
                {
                  echo "<code style='color:red'>" . $incorrectAnswer . "</code>";
                  echo "<br />"; 
                }
                foreach ($value[2] as $pointsKey => $pointsFinal) 
                {
                  echo "Your final grade is: " . $pointsFinal; 
                }
            }


          }
          else
          {
            echo "Your professor hasn't released your grade yet. Please check back later.";

              foreach ($_POST as $key => $value)
              {
                echo $value; 
              }

          }


?>