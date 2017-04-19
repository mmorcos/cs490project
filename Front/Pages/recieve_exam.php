<section class="container">


     <input type="search" class="form-control" data-table="order-table" placeholder="Search Filter">
     <br >

     <table class="order-table table">
          <thead>
               <tr>
                    <th>Selected</th>
                    <th>Question</th>
                    <th>Point-Value</th>
                    <th>Category</th>
                    <th>Difficulty</th>
               </tr>
          </thead>
          <tbody>
          <tr>
          
          <?php 
          $url = 'https://web.njit.edu/~ac482/CS490/questionretrieve.php';
          //open connection
          $ch = curl_init();
          //set the url, number of POST vars, POST data
          curl_setopt($ch,CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
          
          //curl_setopt($ch,CURLOPT_POST, count($fields));
          //curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
          //execute post
          $exquest = curl_exec($ch); 
          curl_close($ch);
          $exquest = json_decode($exquest, true); 
          
          $numOfQuests = $exquest["questcount"]; 
               

               
//loop from 0 to 3 to add question, PV, Category and Difficulty


          

 for ($i=0; $i<$numOfQuests; $i++) 
          {

               $question =  $exquest["$i"][0]; 
               $points = $exquest["$i"][1];
               $category = $exquest["$i"][2];
               $difficulty = $exquest["$i"][3]; 

               foreach ($question as $questionKey => $questionValue){
                    //$question is pulled out 
               }

               foreach ($points as $pointsKey => $pointsValue){
                   //$points is pulled out 
               }

               foreach ($category as $categoryKey => $categoryValue){
                    //$category is pulled out
               }

               foreach ($difficulty as $difficultyKey => $difficultyValue){
                    //$difficulty is pulled out
               }



               $counter++; 

               echo "<tr><td>" . "<input type='checkbox' name='q[$i]' id='q[$i]' value='" . $questionValue ."'> " . "<td>" .$questionValue. "</td>" . "<td>" . "<input type='text' style='width: 30px' name='newPoints' id='newPoints' placeholder='$pointsValue'>" . "</td>" . "<td>" . $categoryValue . "</td>" . "<td>" . $difficultyValue . "</td>" . "</td></tr>";
                         
                    
          }   
          

/*
          for ($i=0; $i<$numOfQuests; $i++) 
          {
               $counter++; 

               echo "<tr><td>" . "<input type='checkbox' name='q[$i]' id='q[$i]' value='" . "<td>" . json_encode($exquest["$i"][0]) . "</td>" . "'> " . "<td>" . json_encode($exquest["$i"][0]) . "</td>" . "</td></tr>";
                         
                    
          }   
          */
          
          //echo "<input type='text' name='examID' id='examID' class='form-control' placeholder='Enter an exam ID' autofocus=''>" . "<br />";
            
                    
                    

          
?>   
          
          </tr>
          </tbody>
     </table>

</section>

<script>

(function(document) {
     'use strict';

     var LightTableFilter = (function(Arr) {

          var _input;

          function _onInputEvent(e) {
               _input = e.target;
               var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
               Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                         Arr.forEach.call(tbody.rows, _filter);
                    });
               });
          }

          function _filter(row) {
               var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
               row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
          }

          return {
               init: function() {
                    var inputs = document.getElementsByClassName('form-control');
                    Arr.forEach.call(inputs, function(input) {
                         input.oninput = _onInputEvent;
                    });
               }
          };
     })(Array.prototype);

     document.addEventListener('readystatechange', function() {
          if (document.readyState === 'complete') {
               LightTableFilter.init();
          }
     });

})(document);

</script>