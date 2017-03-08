<?php
//include_once 'LoginCheck.php';

//extract data from the post
//set POST variables

//$url = "https://web.njit.edu/~st456/index.php";
///include_once 'http://localhost:8888/CS490/Front/Pages/LoginCheck.php';

$url = "https://web.njit.edu/~st456/index.php";
//$url = "https://web.njit.edu/~ac482/CS490/LoginCheck.php";
$fields = array(
	'username' => $_POST['username'],
	'password' => $_POST['password'],
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
//close connection
curl_close($ch);


include_once 'https://web.njit.edu/~ac482/CS490/Connect.php';
include_once 'https://web.njit.edu/~ac482/CS490/LoginCheck.php';

$retrieve = file_get_contents("php://input");
var_dump($retrieve);
var_dump($userType);

//$tmp = $result; 
//if ($tmp == 'Invalid Login1')

/*echo "\n";

var_dump($ch);

if ($result == 'Student')
{
	echo "result is equal to student";
}
elseif ($result == 'Professor')
{
	echo "result is equal to professor";
}

//print_r($result);
$everything = get_defined_vars();
ksort($everything);
echo '<pre>';
print_r($everything);
echo '</pre>';


if ($result == 'Student')
{
	echo "you are a student";
	echo $result; 
	//header('Location: sview.php');
	exit; 
}
elseif ($result == 'Professor') 
{
	echo "you are a professor";
	//header('Location: pfview.html');
	exit; 
}
else {
echo "failure";
}

if ($result == 'Student')
{	
	echo '<script> window.location.replace("https://web.njit.edu/~mm723/Front/Pages/sview.php");</script>';
	//header("Location: sview.php");
	//echo '<script>setTimeout(function(){window.location.href="sview.php"},1000)</script>';
}
 else if ($result == 'Professor')
{
	echo '<script> window.location.replace("https://web.njit.edu/~mm723/Front/Pages/pfview.html");</script>';
	//header('Location: pfview.html');
	//echo '<script>setTimeout(function(){window.location.href="pfview.html"},1000)</script>';
} */
 ?>