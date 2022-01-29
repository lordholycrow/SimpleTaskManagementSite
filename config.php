<?php 

	$conn = mysqli_connect("localhost", "root", "", "pm_system");
     mysqli_set_charset($conn,"utf8");
	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>