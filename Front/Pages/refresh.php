  <?php   
    $url = "https://web.njit.edu/~ac482/CS490/questionretrieve.php";
    $fields = array(
	  'difficulty' => $_POST['difficulty'],
    );

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
curl_close($ch);

//new line added
echo "<script>setTimeout(\"location.href = 'create_exam.php';\",1);</script>";


 ?>
 