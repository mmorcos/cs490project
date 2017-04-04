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
         

          $counter=0; 

      foreach ($ques as $key => $value) {
        echo "<tr>" . "<label id ='value$key' for='value$key'>$value</label>" . "<tr><tr>" . "<input type='hidden' id='quest$key' name='quest$key' value='$value'>" . "</tr><br />" . "<textarea id='value[$key]' cols='80' rows='20' name='value[$key]'></textarea>" . "<br /><br />"; 
        $counter++; 

        //if ($qnum != '0'){

          //echo "<tr>" . "<label id='examQ$qnum' for='examQ$qnum'>$examQ</label>" . "</tr><tr>" . "<input type='hidden' id='quest$qnum' name='quest$qnum' value='$examQ'>" . "</tr><br />" . "<textarea id='examQ$qnum' cols='80' rows='20' name='examQ$qnum'></textarea>". "<br /><br />";
 
      //  }
      

}







?>