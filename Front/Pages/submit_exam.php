<?php 

/*
foreach($_POST['q'] as $key => $item){
  echo $item; 
  print "<tr><td>" . $key . "</td><td>" . $item['q'] . "</td><td>" . $item['q'] . "</td></tr>";

}
    */


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
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


//execute post
$result = curl_exec($ch);
//close connection
curl_close($ch);

echo "Your exam has been submitted. Please wait for your instructor to post your grade";







?>