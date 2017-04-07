<?php 

$examID = $_POST['examID'];
$qvalue = $_POST['q']; 
$difficulty = $_POST['difficulty'];
$count = 0; 

/*
	foreach ($qvalue as $question => $value) {	
  $count=$count++; 
  $newValue[$count] = $value; 
    }		*/

    $ques = implode("\n", $qvalue);



		  

     $url = 'https://web.njit.edu/~ac482/CS490/examstore.php';
          //open connection

          $fields = array(
          'examID' => $examID,
          'newValue' => $ques,
          'count' => $count, 
          'difficulty' => $difficulty,
          );

          

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

          $ch = curl_init();

          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
          curl_setopt($ch,CURLOPT_POST, count($fields));
          curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

          //execute post
          $exquest = curl_exec($ch); 
          curl_close($ch);
          $exquest = json_decode($exquest, true); 

echo "<script>setTimeout(\"location.href = 'pfview.html';\",1);</script>";




/*

		foreach ($exquest as $examQ) {
				// we skip question 0
				if ($qnum != '0'){
  				echo "<tr>" . "<label id='examQ$qnum' for='examQ$qnum'>$examQ</label>" . "</tr><tr>" . "<input type='hidden' id='quest$qnum' name='quest$qnum' value='$examQ'>" . "</tr><br />" . "<textarea id='examQ$qnum' cols='80' rows='20' name='examQ$qnum'></textarea>". "<br /><br />";
 
				}
			$qnum++;

}

*/




?>