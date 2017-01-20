 <?php
         require_once 'connect.php';
         $db = new connect();
         $conn = $db->connection();
         $array =  array('0' => 0);
         $question = array();
         for ($i=1; $i <=5; $i++) { 
            $num = rand( 1, 10 );
            if (check($array, $num)) {
               $i--;
               continue;
            } 
            
            $query = mysqli_query($conn,"SELECT * FROM qanda WHERE id = '$num'");
            $row = mysqli_fetch_assoc($query);
            $question[$i] = $row["question"];
            check($array, $num);
            $array[$i] = $num;
         }
         echo json_encode($question);
         mysqli_close($conn);
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