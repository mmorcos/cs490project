<?php 

$examID = $_POST['examID'];
$qvalue = $_POST['q']; 
$count = 0; 
	foreach ($qvalue as $question => $value) {
  $count++; 
  echo $value; 
    }		

		  $url = 'https://web.njit.edu/~st456/retrieve.php';
          //open connection
          $ch = curl_init();

          $fields = array(
          'value' => $value,
          'examID' => $examID,
          );

         // echo $count; 
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		     rtrim($fields, '&');
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

          //execute post
          $exquest = curl_exec($ch); 
          curl_close($ch);
          $exquest = json_decode($exquest, true); 



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