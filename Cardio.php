<?php
	
	require "connect.inc.php";
	
	$data = json_decode(stripslashes($_GET['result']));
	
	for($i=0;$i<count($data);$i+=5){
		$workout = $data[$i];
		$distance = $data[$i+1];
		$minutes = $data[$i+2];
		$seconds = $data[$i+3];
		$timestamp = $data[$i+4];
		
		$time = ($minutes*60)+$seconds;
		
		$query = "INSERT INTO `$table_cardio` (`timestamp`,`workout`, `distance`, `time`) VALUES ('$timestamp','$workout','$distance','$time')";
		
		mysqli_query($connect,$query);
	}

?>