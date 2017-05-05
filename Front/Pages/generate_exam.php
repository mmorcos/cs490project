<?php 



      $url = 'https://web.njit.edu/~ac482/CS490/examretrieve.php';
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
          $ques = curl_exec($ch); 
          curl_close($ch);
          $ques = json_decode($ques, true); 
          //$checked = $ques["checkcount"];

         // print_r($ques);

          foreach ($ques as $key => $value)

          {
            foreach ($value[0] as $key => $nvalue) 
              {
               echo "<tr>" . "<label id ='nvalue$key' for='nvalue$key'>$nvalue</label>" . "<tr><tr>" . "<input type='hidden' id='quest[]' name='quest[]' value='$nvalue'>" . "</tr><br />" . "<textarea id='nvalue[]' cols='80' rows='20' name='nvalue[]'></textarea>" . "<br /><br />"; 

              }
            foreach ($value[1] as $methodKey => $methodValue) 
            {

                echo "<input type='hidden' id='method[]' name='method[]' value='$methodValue'>";
 
            }
            foreach ($value[2] as $pointKey => $pointValue)
            {
              echo "The above question is worth " . $pointValue . " points.";
              echo "<input type='hidden' id='points[]' name='points[]' value='$pointValue'>";
              echo "<br>";
              echo "<br>";

            }
            foreach ($value[3] as $caseOneKey => $caseOneValue) 
            {
              echo "<input type='hidden' id='caseOne[]' name='caseOne[]' value='$caseOneValue'>";
            }
            foreach ($value[4] as $caseTwokey => $caseTwoValue) 
            {
              echo "<input type='hidden' id='caseTwo[]' name='caseTwo[]' value='$caseTwoValue'>";
            }

            foreach($value[5] as $caseThreeKey => $caseThreeValue)
            {
              echo "<input type='hidden' id='caseThree[]' name='caseThree[]' value='$caseThreeValue'>";

            }
            foreach($value[6] as $caseFourKey => $caseFourValue)
            {
              echo "<input type='hidden' id='caseFour[]' name='caseFour[]' value='$caseFourValue'>";

            }
            foreach($value[7] as $answerOneKey => $answerOneValue)
            {
              echo "<input type='hidden' id='answerOne[]' name='answerOne[]' value='$answerOneValue'>";

            }
            foreach($value[8] as $answerTwoKey => $answerTwoValue)
            {
              echo "<input type='hidden' id='answerTwo[]' name='answerTwo[]' value='$answerTwoValue'>";

            }
            foreach($value[9] as $answerThreeKey => $answerThreeValue)
            {
              echo "<input type='hidden' id='answerThree[]' name='answerThree[]' value='$answerThreeValue'>";

            }
            foreach($value[10] as $answerFourKey => $answerFourValue)
            {
              echo "<input type='hidden' id='answerFour[]' id='answerFour[]' value='$answerFourValue'>";

            }


          }

          /*




          $counter=0; 

      foreach ($ques as $key => $value) {
        echo "<tr>" . "<label id ='value$key' for='value$key'>$value</label>" . "<tr><tr>" . "<input type='hidden' id='quest$key' name='quest$key' value='$value'>" . "</tr><br />" . "<textarea id='value[$key]' cols='80' rows='20' name='value[$key]'></textarea>" . "<br /><br />"; 
        $counter++; 

        //if ($qnum != '0'){

          //echo "<tr>" . "<label id='examQ$qnum' for='examQ$qnum'>$examQ</label>" . "</tr><tr>" . "<input type='hidden' id='quest$qnum' name='quest$qnum' value='$examQ'>" . "</tr><br />" . "<textarea id='examQ$qnum' cols='80' rows='20' name='examQ$qnum'></textarea>". "<br /><br />";
 
      //  }
      

}




*/


?>