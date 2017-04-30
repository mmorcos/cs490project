<?php
$examID = $_POST['examID'];
$qvalue = $_POST['q']; 
$newPoints = $_POST['newPoints'];
$answerOneValue = $_POST['answerOneValue'];
$answerTwoValue = $_POST['answerTwoValue'];
$answerThreeValue = $_POST['answerThreeValue'];
$answerFourValue = $_POST['answerFourValue'];
$caseOneValue = $_POST['caseOneValue'];
$caseTwoValue = $_POST['caseTwoValue'];
$caseThreeValue = $_POST['caseThreeValue'];
$caseFourValue = $_POST['caseFourValue'];
$i = 0; 

  $ques = implode("\n", $qvalue);


$url = "https://web.njit.edu/~ac482/CS490/examstore.php";
          $fields = array(
          'examID' => $examID,
          'ques' => $ques,
       	 'newPoints' => $newPoints,
       /*     'answerOneValue' => $answerOneValue,
          'answerTwoValue' => $answerTwoValue,
          'answerThreeValue' => $answerThreeValue,
          'answerFourValue' => $answerFourValue,
          'caseOneValue' => $caseOneValue, 
          'caseTwoValue' => $caseTwoValue, 
          'caseThreeValue' => $caseThreeValue,
          'caseFourValue' => $caseFourValue,*/
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

/*
$exam[$examID] = 'exam' . $examID . '.php';       //This generates the file name
echo $exam[$examID];								 //This  just echos the filename to be created



while($i<=sizeof($qvalue)-1)
{	
	//$compiled = 'answer' .$i; 					//gives the name of the file to compile

	foreach ($qvalue as $key => $value){
		file_put_contents($exam[$examID], $value, FILE_APPEND);
		file_put_contents($exam[$examID], $questions, FILE_APPEND);
		file_put_contents($exam[$examID], $eop, FILE_APPEND);
		file_put_contents($exam[$examID], $summarypage, FILE_APPEND);

		//file_put_contents($exam[$examID], $value, FILE_APPEND); 


	}
	$i++; 
}
*/


 ?>