<?php 
/*
$i=0; 
for($i=0; $i<$counter; $i++)
{
	//$value[$i] = $_POST['value'];
}

$floc = 'people.txt';
$dfile = fopen($floc, 'r');
$tarr = fread($dfile, filesize($floc));
$tarr = json_decode($tarr, 1);
fclose($dfile);


$file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $current);


$myfile[] = fopen($file[$i], "w");      //This creates an array of files with index i and the "w" permmission 
	fwrite($myfile, $value);		//this SHOULD write $value to $myfile
	fclose($myfile);			

*/



$counter = sizeof($_POST['value']);
$value = $_POST['value'];


$i=0; 
while($i<=sizeof($value)-1)
{	

	$file[$i] = 'answer' . $i . '.jar';       //This generates the file name
	echo $file;								 //This  just echos the filename to be created

	file_put_contents($file[$i], $value[$i]); //This saves the files with their corresponding answers

	$i++; 

}



$arr = get_defined_vars();
print_r($arr)

/*
for($i=0; $i<=$counter; $i++)
{
	$file = 'answer' .$i . '.txt';

}

$arr = get_defined_vars();
print_r($arr)

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