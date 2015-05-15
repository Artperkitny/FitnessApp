<?php
	
	require "connect.inc.php";
	
	$data = json_decode(stripslashes($_GET['result']));
	
	for($i=0;$i<count($data);$i+=5){
		$workout = $data[$i];
		$sets = $data[$i+1];
		$weight = $data[$i+2];
		$reps = $data[$i+3];
		$timestamp = $data[$i+4];
		
		$query = "SELECT `id` FROM `workouts_weight` where `workout`='$workout';";
		$result = mysqli_query($connect,$query);
		while($row = mysqli_fetch_array($result)){
		 $value = $row[0];
		}	
		$query = "INSERT INTO `$table_weights` (`timestamp`,`workout`, `sets`, `weight`, `reps`) VALUES ('$timestamp','$value','$sets','$weight','$reps')";
		
		mysqli_query($connect,$query);
	}

?>