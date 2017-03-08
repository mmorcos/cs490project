<?php 

$q1 = $_POST["q1"]; 
$q2 = $_POST["q2"]; 
$q3 = $_POST["q3"]; 
$q4 = $_POST["q4"]; 
$q5 = $_POST["q5"]; 
$q6 = $_POST["q6"]; 

echo $q3; 
echo $q1; 

/*//extract data from the post
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