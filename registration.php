<?php
	require_once 'connect.php';
	$db = new connect();
	$conn = $db->connection();
     try{
    	 $name = $_POST['name'];
    	 $email = $_POST['email'];
         $year = $_POST['year'];
         $branch = $_POST['branch'];
         $bmonth = $_POST['BirthMonth'];
         $bday = $_POST['BirthDay'];
         $byear = $_POST['BirthYear'];
         $gender = $_POST['gender'];
         $phone = $_POST['phone'];

         	$query = "INSERT INTO studentinfo(name, email, branch, year, bmonth, bday, byear, gender, phone) VALUES('$name', '$email', '$branch', '$year', '$bmonth', '$bday', '$byear', '$gender', '$phone')";      
            mysqli_query($conn, $query);
            mysqli_close($conn);

            ob_start(); // ensures anything dumped out will be caught
            // do stuff here
            $url = 'http://localhost/interview/InterviewTestPage.html'; // this can be set based on whatever

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