<?php
    $request = file_get_contents('php://input');
    $username=$_POST['username'];
    $password=$_POST['password'];
    //echo $username;

    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://web.njit.edu/~mm723/testing/LoginCheck.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false); // required as of PHP 5.6.0
    curl_setopt($ch, CURLOPT_POSTFIELDS, $username); 
    $output = curl_exec($ch);
    curl_close($ch);

//echo var_dump($ch);
var_dump(debug_backtrace());

//echo var_dump(username);
//echo var_dump($output);
?>