<?php
$connection = mysqli_connect("localhost", "arjun_olc", "arjunolc", "arjun_olc");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
	}
?>