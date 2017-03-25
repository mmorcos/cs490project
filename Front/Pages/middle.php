<?php
    
    //var_dump($send);
    echo "scucess";
    $username =json_encode($_POST['username']);
    $password =json_encode($_POST['password']);
    $data = trim(file_get_contents("php://input"));

	$URL = "http://localhost:8888/CS490/Front/Testing/LoginCheck.php";
	
                                                                                  
    $ch = curl_init();                                                                      
    curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                      
	curl_setopt($ch, CURLOPT_POSTFIELDS, $username);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $password);                                                                  
    curl_setopt($ch, CURLOPT_POST, 1);          

    curl_exec($ch);
	//$result = curl_exec($ch);
	//echo $result;
	curl_close($ch);
	
?>