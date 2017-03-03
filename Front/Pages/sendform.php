  <?php   
    //$URL="fuckthis.html"; //delete this line before production
    $category=json_encode($_POST['category']);
    $difficulty=json_encode($_POST['difficulty']);
    $methodName =json_encode($_POST['methodName']);
    $parameters=json_encode($_POST['parameters']);
    $question=json_encode($_POST['question']);
var_dump($category);
   /* $ch = curl_init();                                                                      
	curl_setopt($ch, CURLOPT_POST, 1);          
    curl_setopt($loginDB, CURLOPT_URL, $URL);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $username);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
	curl_close($ch);

*/
        ?>