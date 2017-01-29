<?php
require_once 'connect.php';
         $db = new connect();
         $conn = $db->connection();
         session_start();
$uid = $_SESSION['uid'];
$result = mysqli_query($conn, "SELECT * From studentinfo Where uid = '$uid'");
 
           $row = mysqli_fetch_assoc($result);
           $name = $row['name'];
           $branch = $row['branch'];
           $year = $row['year'];
         $subject = $name.' '.$year.' '.$branch;
         $question = $_SESSION['question'];
         $answer1 = $_POST['option1'];
         $answer2 = $_POST['option2'];
         $answer3 = $_POST['option3'];
         $answer4 = $_POST['answer1'];
         $answer5 = $_POST['answer2'];

         $body = $question[1]."\n".$answer1."\n"."\n".$question[2]."\n".$answer2."\n"."\n".$question[3]."\n".$answer3."\n"."\n".$question[4]."\n".$answer4."\n"."\n".$question[5]."\n".$answer5;
         
$headers = "From: Codestrike <sender@some.com>\r\n";
$headers .= "Content_type: text/html\r\n";
$data = mail('burhanuddinzrampurawala@yahoo.com', $subject, $body, $headers);

ob_start(); // ensures anything dumped out will be caught
            // do stuff here
             $url = 'http://localhost/interview'; // this can be set based on whatever

            // clear out the output buffer
            while (ob_get_status()) 
            {
                ob_end_clean();
            }

            // no redirect
            header( "Location: $url" );

?>