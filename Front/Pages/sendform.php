  <?php   
    $url = "https://web.njit.edu/~ac482/CS490/questionstore.php";
    $fields = array(

	  'methodName' => $_POST['methodName'],
	  'pointValue' => $_POST['pointValue'],
	  'category' => $_POST['category'],
	  'difficulty' => $_POST['difficulty'],
	  'question' => $_POST['question'],
	  'parameter1' => $_POST['parameter1'],
	  'parameter2' => $_POST['parameter2'],
	  'parameter3' => $_POST['parameter3'],
	  'parameter4' => $_POST['parameter4'],
	  'case1' => $_POST['case1'],
	  'case2' => $_POST['case2'],
	  'case3' => $_POST['case3'],
	  'case4' => $_POST['case4'],
	  'answer1' => $_POST['answer1'],
  	  'answer2' => $_POST['answer2'],
	  'answer3' => $_POST['answer3'],
	  'answer4' => $_POST['answer4'],
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
echo "<script>setTimeout(\"location.href = 'questionform.html';\",1);</script>";


 ?>
 