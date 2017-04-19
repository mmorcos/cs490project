<?php
$examID = $_POST['examID'];
$qvalue = $_POST['q']; 
$count = 0; 
$arr = get_defined_vars();
print_r($arr);
		  


while($i<=sizeof($qvalue)-1)
{	
	$exam[$examID] = 'exam' . $examID . '.php';       //This generates the file name
	//$compiled = 'answer' .$i; 					//gives the name of the file to compile
	//echo $file;								 //This  just echos the filename to be created

	file_put_contents($exam[$examID], $qvalue); 
	$i++; 
}
/*
$url = "https://web.njit.edu/~ac482/examstore.php";
          $fields = array(
          'examID' => $examID,
          'newValue' => array($newValue),
          );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


//execute post
$result = curl_exec($ch);
//close connection
curl_close($ch);

*/


 ?>
 