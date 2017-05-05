
<?php 
//$counter = sizeof($_POST['nvalue']);
//$quest = $_POST['quest']; 
//$nvalue = $_POST['nvalue'];
//$method = $_POST['method'];
//$points = $_POST['points'];
//$caseOne = $_POST['caseOne'];
/*$caseTwo = $_POST['caseTwo'];
$caseThree = $_POST['caseThree'];
$caseFour = $_POST['caseFour'];
$answerOne = $_POST['answerOne'];
$answerTwo = $_POST['answerTwo'];
$answerThree = $_POST['answerThree'];
$answerFour = $_POST['answerFour'];*/



$i=0; 


$capture = array();
$count = 0;
foreach ($_POST as $key => $value) {
  $capture["$key"] = $value;
  $count++;
}
$count--;
$count = $count/2;
$capture["count"] = $count;
$capture = json_encode($capture);



$url = "https://web.njit.edu/~ac482/CS490/grading.php";


//foreach ($nvalue as $key => $answer) {
//echo ". [".$key."] = ".$answer."<br>";
//}
$fields = array(

	/*counter' => $counter, 
	'quest' => $quest, 
	'nvalue' => $nvalue, 
	'method' => $method, 
	'points' => $points, 
	'caseOne' => $caseOne, 
	'caseTwo' => $caseTwo, 
	'caseThree' => $caseThree, 
	'caseFour' => $caseFour, 
	'answerOne' => $answerOne, 
	'answerTwo' => $answerTwo, 
	'answerThree' => $answerThree, 
	'answerFour' => $answerFour, 
	'nvalue' => $nvalue,*/
  
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
//curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $capture);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
header("Location: sview.php");


?>