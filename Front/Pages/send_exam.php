<?php 

include_once 'questionretrieve.php';


//setup vars to send 
//$q = $_POST['q'];
//$version = $_POST['version'];

if ($q[0] =="on")
{
	$question1 = $fields[0]; 
	echo "Question 1: " . $question1 . "<br /> \n"; 
}/*
if ($q[1]=="on") 
{
	$question2 = $fields[1]; 
	echo "Question 2: " . $question2 . "<br /> \n"; 
}
if ($q[2]=="on") 
{
	$question3 = $fields[2]; 
	echo "Question 3: " . $question3 . "<br /> \n"; 
}
if ($q[3]=="on") 
{
	$question4 = $fields[3]; 
	echo "Question 4: " . $question4 . "<br /> \n"; 
}
if ($q[4]=="on") 
{
	$question4 = $fields[4]; 
	echo "Question 5: " . $question5 . "<br /> \n"; 
}
if ($q[5]=="on") 
{
	$question5 = $fields[5]; 
	echo "Question 6: " . $question6 . "<br /> \n"; 
}

/*
//sending exam to backend
$url = "https://web.njit.edu/~ac482/examstore.php";
//$url = "https://web.njit.edu/~ac482/CS490/LoginCheck.php";
$fields = array(
	'version' => $_POST['version'],
	'question1' => $_POST['question1'],
	'question2' => $_POST['question2'],
	'question3' => $_POST['question3'],
	'question4' => $_POST['question4'],
	'question5' => $_POST['question5'],
	'question6' => $_POST['question6'],


);
$send = json_encode($fields);

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











//$q=implode(',', $_POST['q']);
/extract data from the post
//set POST variables
$url = "web.njit.edu/~st456/index.php";
$fields = array(
	'q1' => $_POST['q1'],
	'q2' => $_POST['q2'],
	'q3' => $_POST['q3'],
	'q4' => $_POST['q4'],
	'q5' => $_POST['q5'],
	'q6' => $_POST['q6'],
);
$send = json_encode($fields);

//var_dump($send);
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
echo $result;

//close connection
curl_close($ch);
*/
 ?>