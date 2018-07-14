<?php

require_once("../includes/database.php");

if(isset($_GET['cdel'])){

	$delete_id = $_GET['cdel'];	
	
	$delete_query = "DELETE from tbl_computers where s_no = '$delete_id'";
	
	if(mysqli_query($connection, $delete_query)){
	
		echo "<script> alert ('student has been deleted')</script>";
		echo "<script> window.open('../computer.php', '_self')</script>";
	
	
	
	}


}

?>