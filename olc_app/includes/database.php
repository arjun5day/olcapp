<?php
$connection = mysqli_connect("localhost", "root", "", "db_olc");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
	}
?>
