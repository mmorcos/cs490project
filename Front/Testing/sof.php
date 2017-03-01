<?php //extract data from the post
//set POST variables
//$url = 'https://web.njit.edu/~mm723/middle.php';
curl_setopt($loginDB, CURLOPT_URL, "https://web.njit.edu/~ac482/CS490/middle.php");

$fields = array(
	'username' => $_POST['username'],
	'password' => $_POST['password'],
);

$send = json_encode($fields);


//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


//execute post
$result = curl_exec($ch);
echo $result;
//close connection
curl_close($ch);
 ?>