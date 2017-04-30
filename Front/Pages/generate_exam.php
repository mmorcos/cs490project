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
               echo "<tr>" . "<label id ='value$key' for='value$key'>$nvalue</label>" . "<tr><tr>" . "<input type='hidden' id='quest$key' name='quest$key' value='$nvalue'>" . "</tr><br />" . "<textarea id='value[$key]' cols='80' rows='20' name='value[$key]'></textarea>" . "<br /><br />"; 

              }
            foreach ($value[1] as $methodKey => $methodValue) 
            {

                echo "<input type='hidden' id='method$methodKey' value='$methodValue'>";
 
            }
            foreach ($value[2] as $caseOneKey => $caseOneValue) 
            {
              echo "<input type='hidden' id='case$caseOneKey' value='$caseOneValue'>";
            }
            foreach ($value[3] as $caseTwokey => $caseTwoValue) 
            {
              echo "<input type='hidden' id='case$caseTwoKey' value='$caseTwoValue'>";
            }

            foreach($value[4] as $caseThreeKey => $caseThreeValue)
            {
              echo "<input type='hidden' id='case$caseThreeKey' value='$caseThreeValue'>"

            }
            foreach($value[5] as $caseFourKey => $caseFourValue)
            {
              echo "<input type='hidden' id='case$caseFourKey' value='$caseFourValue'>";

            }
            foreach($value[6] as $answerOneKey => $answerOneValue)
            {
              echo "<input type='hidden' id='answer$answerOneKey' value='$answerOneValuen'>";

            }
            foreach($value[7] as $answerTwoKey => $answerTwoValue)
            {
              echo "<input type='hidden' id='answer$answerTwoKeyw' value='$answerTwoValue'>";

            }
            foreach($value[9] as $answerThreeKey => $answerThreeValue)
            {
              echo "<input type='hidden' id='answer$answerThreeKey' value='$answerThreeValue'>";

            }
            foreach($value[10] as $answerFourKey => $answerFourValue)
            {
              echo "<input type='hidden' id='answer$answerFourKey' value='$answerFourValue'>";

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