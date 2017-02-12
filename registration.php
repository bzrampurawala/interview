<?php
require_once 'connect.php';
$db = new connect();
$conn = $db->connection();
session_start();
try{

      $name = $_POST['name'];
      $email = $_POST['email'];
      $year = $_POST['year'];
      $branch = $_POST['branch'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $phone = $_POST['phone'];
      $uid = uniqid('', true);
      $_SESSION['uid'] = $uid;

      $query = "INSERT INTO studentinfo(name, email, branch, year, dob, gender, phone, uid) VALUES('$name', '$email', '$branch', '$year', '$dob', '$gender', '$phone', '$uid')";
      mysqli_query($conn, $query);

            //0 is for pending i.e it should be after registeration
            // 1 is for wirtting i.e it should be after login
      mysqli_query($conn, "UPDATE studentinfo SET status = '1' WHERE uid = '$uid'");
      mysqli_close($conn);

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

    }catch(Exception $e){
        echo var_dump($e->getMessage());
    }

    ?>