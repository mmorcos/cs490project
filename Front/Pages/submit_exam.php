<?php 



$counter = sizeof($_POST);
$counter = $counter/2; 
$value = $_POST['value']; 


$i=0; 
for($i=0; $i<$counter; $i++)
{
	$value[$i] = $_POST['value'];
}
$arr = get_defined_vars();
print_r($arr);


/*
$value1 = $_POST['value1'];
echo $value1; 


$answers = $_POST['answers'];



foreach($_POST as $life => $shit) {

   $outValue = $life . "<br>";
echo $outValue; 
}





foreach ($_POST as $param_name => $param_val) {
    //echo "Param: $param_name; Value: $param_val<br />\n";
	//echo $param_name; 
	echo $param_val;

}
*/

/*
 foreach ($value as $key => $answer) {
echo ". [".$key."] = ".$answer."<br>";
 }

$url = "https://web.njit.edu/~st456/index.php";
$fields = array(
  'question' => $_POST['q'],
);
//$send = json_encode($fields);

//var_dump($send);
//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_POST, count($fields))$key]
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


//execute post
$result = curl_exec($ch);
//close connection
curl_close($ch);

echo "Your exam has been submitted. Please wait for your instructor to post your grade";


*/




?>