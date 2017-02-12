<?php

	$data=$_REQUEST;
	$temp=(int)$data['x'];
	require_once 'connect.php';
	$db = new connect();
	$conn = $db->connection();
	$query="";

    if($temp==3){
    	$query="SELECT `name`,`email`,`branch`,`year` FROM `studentinfo`";

    }
    else{
	$query="SELECT `name`,`email`,`branch`,`year` FROM `studentinfo` WHERE `status`=$temp";
    }
    //$query="SELECT `name` FROM `studentinfo`";

	$result=mysqli_query($conn,$query);
	$arr=array();
	

	$row_count=mysqli_num_rows($result);

	/*while ($row_count>0) {
		# code...
		print_r(mysqli_fetch_assoc($result));
		$row_count--;
	}*/
	
	while($row=mysqli_fetch_assoc($result)){
		array_push($arr, $row);
	}

	//print_r($arr);


	mysqli_close($conn);

	//echo ($row_count);
	echo json_encode($arr);



	
?>