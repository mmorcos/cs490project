
<?php 
$questionValue = $_POST['questionValue'];
$answerValue = $_POST['answerValue'];
$questionGrade = $_POST['questionGrade'];
$questionScore = $_POST['questionScore'];
$compileStatusValue = $_POST['compileStatusValue'];
$compileGradeValue = $_POST['compileGradeValue'];
$caseStatusValue = $_POST['caseStatusValue'];
$caseGradeValue = $_POST['caseGradeValue'];
$parenBracketValue = $_POST['parenBracketValue'];
$bracketValue = $_POST['bracketValue'];
$gradeValue = $_POST['gradeValue'];
$feedback = $_POST['feedback'];


$i=0; 


$vals = array();
$count = 0;
foreach ($_POST as $key => $value) {
  $vals["$key"] = $value;
  $count++;
}
$count--;
$count = $count/2;
$vals["count"] = $count;
$vals = json_encode($vals);



$url = "https://web.njit.edu/~ac482/CS490/storeupdatedgrade.php";


//foreach ($nvalue as $key => $answer) {
//echo ". [".$key."] = ".$answer."<br>";
//}
$fields = array();



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
curl_setopt($ch,CURLOPT_POSTFIELDS, $vals);


//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
echo "Your exam has been submitted. Please wait for your instructor to post your grade";


?>