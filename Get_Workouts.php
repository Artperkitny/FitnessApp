<?php
	
	require "connect.inc.php";
	
	echo "<option selected DISABLED>Select Workout</option>";
	
	$query = "SELECT `workout` FROM `workouts_weight`;";
	$result = mysqli_query($connect,$query);
	while($row = mysqli_fetch_array($result)){
		echo "<option>".$row[0]."</option>";
	}
	
	echo "<option>Other</option>";
?>