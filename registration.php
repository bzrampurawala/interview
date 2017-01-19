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
       
    }catch(Exception $e){
    echo var_dump($e->getMessage());
}
            
?>