
<?php 
$counter = sizeof($_POST['value']);
$value = $_POST['nvalue'];
$answerOneValue = $_POST['answerOneValue'];
$answerTwoValue = $_POST['answerTwoValue'];
$answerThreeValue = $_POST['answerThreeValue'];
$answerFourValue = $_POST['answerFourValue'];
$caseOneValue = $_POST['caseOneValue'];
$caseTwoValue = $_POST['caseTwoValue'];
$caseThreeValue = $_POST['caseThreeValue'];
$caseFourValue = $_POST['caseFourValue'];
$methodValue = $_POST['methodValue'];
$i=0; 




$url = "https://web.njit.edu/~ac482/CS490/grading.php";


foreach ($value as $key => $answer) {
echo ". [".$key."] = ".$answer."<br>";
 }
$fields = array(
  'question' => $_POST['q'],
  'answer' => $answer, 
  'methodValue' => $methodValue,
  'answerOneValue' => $answerOneValue,
  'answerTwoValue' => $answerTwoValue,
  'answerThreeValue' => $answerThreeValue,
  'answerFourValue' => $answerFourValue,
  'caseOneValue' => $caseOneValue, 
  'caseTwoValue' => $caseTwoValue, 
  'caseThreeValue' => $caseThreeValue,
  'caseFourValue' => $caseFourValue,
);


//$send = json_encode($fields);
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
echo "Your exam has been submitted. Please wait for your instructor to post your grade";

?>