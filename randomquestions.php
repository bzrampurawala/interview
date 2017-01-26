 <?php
         require_once 'connect.php';
         $db = new connect();
         $conn = $db->connection();
         $array =  array('0' => 0);
         $question = array();
         $sql = " Select uid From questions";
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0 )
         {
           while ($row = mysqli_fetch_assoc($result)) 
           {
             $uid[] = $row["uid"];
           }

         }
         for ($i=1; $i <=3; $i++) { 
            $num = rand( 1, 15 );
            if ($uid[$num-1] == 0) {
               if (check($array, $num)) {
                  $i--;
                  continue;
               } 
               
               $query = mysqli_query($conn,"SELECT * FROM questions WHERE id = '$num'");
               $row = mysqli_fetch_assoc($query);
               $question[$i] = $row["question"];
               $array[$i] = $num;
            }
            
         }
         for ($i=4; $i <=5; $i++) { 
            $num = rand( 16, 25 );
            if ($uid[$num-1] == 1) {
               if (check($array, $num)) {
                  $i--;
                  continue;
               } 
               
               $query = mysqli_query($conn,"SELECT * FROM questions WHERE id = '$num'");
               $row = mysqli_fetch_assoc($query);
               $question[$i] = $row["question"];
               $array[$i] = $num;
            }
            
         }
         $k = 1;
         for ($j=1; $j <4 ; $j++) { 
            $num = $array[$j]*4;
            $limit = $num - 4;
           while ($num>$limit) { 
               $query = mysqli_query($conn,"SELECT * FROM answers WHERE id = '$num'");
               $row = mysqli_fetch_assoc($query);
               $answer[$k] = $row["answers"];
               $num--;
               $k++;
          }
         }
         
         mysqli_close($conn);
         session_start();
         $_SESSION ['question'] = $question;
         $_SESSION ['answer'] = $answer;  

         ob_start(); // ensures anything dumped out will be caught
            // do stuff here
             $url = 'http://localhost/interview/questionspage.php'; // this can be set based on whatever

            // clear out the output buffer
            while (ob_get_status()) 
            {
                ob_end_clean();
            }

            // no redirect
            header( "Location: $url" );
         function check($array, $num)
         {
            for ($i=0; $i <count($array); $i++) { 
               if($array[$i] == $num)
                 {
                  return true;
                 } 
            }

         }

?>