
<?php 
$counter = sizeof($_POST['value']);
$value = $_POST['value'];
$i=0; 
while($i<=sizeof($value)-1)
{	
	$file[$i] = 'answer' . $i . '.java';       //This generates the file name
	$compiled = 'answer' .$i; 					//gives the name of the file to compile
	echo $file;								 //This  just echos the filename to be created
	file_put_contents($file[$i], "public class answer", FILE_APPEND);
	file_put_contents($file[$i], $i, FILE_APPEND);
	file_put_contents($file[$i], "{", FILE_APPEND);
	file_put_contents($file[$i], $value[$i], FILE_APPEND); //This saves the files with their corresponding answers
	file_put_contents($file[$i], "}", FILE_APPEND);
	exec("javac $file[$i]");
	$result[$i] = shell_exec("java $compiled");
	$i++; 
}

$url = "https://web.njit.edu/~st456/grade2.php";


foreach ($value as $key => $answer) {
echo ". [".$key."] = ".$answer."<br>";
 }
$fields = array(
  'question' => $_POST['q'],
  'result' => $result[$i],
);
//$send = json_encode($fields);
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