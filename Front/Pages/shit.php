        <?php 

          $url = 'https://web.njit.edu/~ac482/CS490/examretrieve.php';
          //open connection
          $ch = curl_init();
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
          
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
          //execute post
          $testcase = curl_exec($ch); 
          curl_close($ch);
          $testcase = json_decode($testcase);



          $arr = get_defined_vars();
          print_r($arr);

//          print_r($testcase);
            ?>