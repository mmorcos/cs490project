
<?php 
$counter = sizeof($_POST['nvalue']);
$quest = $_POST['quest']; 
$nvalue = $_POST['nvalue'];
$method = $_POST['method'];
$points = $_POST['points'];
$caseOne = $_POST['caseOne'];
$caseTwo = $_POST['caseTwo'];
$caseThree = $_POST['caseThree'];
$caseFour = $_POST['caseFour'];
$answerOne = $_POST['answerOne'];
$answerTwo = $_POST['answerTwo'];
$answerThree = $_POST['answerThree'];
$answerFour = $_POST['answerFour'];



$i=0; 



$url = "https://web.njit.edu/~ac482/CS490/grading.php";


//foreach ($nvalue as $key => $answer) {
//echo ". [".$key."] = ".$answer."<br>";
//}
$fields = array(
	'counter' => $counter, 
	'quest' => $quest, 
	'nvalue' => $nvalue, 
	'method' => $method, 
	'points' => $points, 
	'caseOne' => $caseOne, 
	'caseTwo' => $caseTwo, 
	'caseThree' => $caseThree, 
	'caseFour' => $caseFour, 
	'answerOne' => $asnwerOne, 
	'answerTwo' => $answerTwo, 
	'answerThree' => $answerThree, 
	'answerFour' => $answerFour, 
  
);




//json_encode($fields);
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
echo "<br />";

?>