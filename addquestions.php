<?php
	require_once 'connect.php';
	$db = new connect();
	$conn = $db->connection();
	for ($id=1; $id <11 ; $id++) { 
		$query = "INSERT INTO qanda(id, question, answer) VALUES('$id','question$id', 'answer$id')";
	mysqli_query($conn,$query);
	}
	mysqli_close($conn);
?>