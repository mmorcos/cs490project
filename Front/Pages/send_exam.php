<?php 


foreach($_POST['q'] as $key => $item){
  print "<tr><td>" . $key . "</td><td>" . $item['q'] . "</td><td>" . $item['q'] . "</td></tr>";

}
/*
$capture = array();
$count = 0;
foreach ($_POST['q'] as $key => $value) {
  $capture["$key"] = $value;
  $count++;
  echo $count; 
  //echo $capture["key"]; 
}
*/
/*
$array = array(); 
if (isset($_POST['q']) )
{
	$index = $_POST['q']; 
	if (is_array($index))
	{
		foreach ($index as $q =>$value) 
		{
			//$array [] = $q['q']; 
			echo $q; 

			//echo $q . "<br />";
			//var_dump($value);
			if ($q >= 0)
			{
				echo "there are checkmarks";

			}
			else
			{
				echo "there are no checkmarks";
			}
		}
	}
}
*/

/*
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
          
          //set question number to zero initially
          $qnum = 0; 

		foreach ($exquest as $examQ) {
				// we skip question 0
				if ($qnum != '0'){
  				echo "<tr>" . "<label id='examQ$qnum' for='examQ$qnum'>$examQ</label>" . "</tr><tr>" . "<input type='hidden' id='quest$qnum' name='quest$qnum' value='$examQ'>" . "</tr><br />" . "<textarea id='examQ$qnum' cols='80' rows='20' name='examQ$qnum'></textarea>". "<br /><br />";
 
				}
			$qnum++;

}

*/




?>