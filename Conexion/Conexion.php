<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "ivon123";
	$db = "coupdetat";

	$conn = new mysqli($host, $user, $pass, $db) or die ("Error" . mysqli_errno($conn));
?>