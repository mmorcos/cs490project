<?php //extract data from the post
//set POST variables
$url = "http://localhost:8888/CS490/Front/Testing/middle.php";
//curl_setopt($loginDB, CURLOPT_URL, "http://localhost:8888/CS490/Front/Testing/middle.php");

$fields = array(
	'username' => $_POST['username'],
	'password' => $_POST['password'],
);

$send = json_encode($fields);

var_dump($send);
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
 ?>