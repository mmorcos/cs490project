<?php
    
    var_dump($send);
    echo "scucess";
    $username =json_encode($_POST['username']);
    $password =json_encode($_POST['password']);
   // var_dump($username);
   // var_dump($password);
    $data = trim(file_get_contents("php://input"));
	/*$decoded_data = json_decode($data);
	$username=($decoded_data->username);
	$password=($decoded_data->password); */
	$URL = "http://localhost:8888/CS490/Front/Testing/LoginCheck.php";
	//var_dump($password);
	//$data = array(username => ("$username"), 'password' => ("$password"));
	//$encoded_data = json_encode($data); 
                                                                                  
    $ch = curl_init();                                                                      
    curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                      
	curl_setopt($ch, CURLOPT_POSTFIELDS, $username);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $password);                                                                  
	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ', strlen($data_string)));        
    curl_setopt($ch, CURLOPT_POST, 1);          

    curl_exec($ch);
	//$result = curl_exec($ch);
	//echo $result;
	curl_close($ch);
	
?>