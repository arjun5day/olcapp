<?php
session_start();
require_once("../includes/database.php");

if (isset($_POST['user_name']) && isset($_POST['user_password'])){
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	
	$query = "SELECT * FROM tbl_users WHERE user_name = '$user_name' AND user_password = '$user_password'";
	$result = mysqli_query($connection, $query);
	if(!$result->num_rows==0){
		
		$suser_name_array = $result->fetch_assoc();
			
		$_SESSION['user_name'] = $suser_name_array['user_name'];
		header ("Location: ../computer.php");

		
	}else{
		session_destroy();
		header ("Location: ../login.php");
	}
	
}
/*

session_start();
require_once("../includes/database.php");

if (isset($_POST['user_name']) && isset($_POST['user_password'])){
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	
	$query = "SELECT * FROM tbl_users WHERE user_name = '$user_name' AND user_password = '$user_password'";
	$result = mysqli_query($connection, $query);
	
	if($query_run = mysqli_query($connection, $query)){
		$query_num_rows = mysqli_num_rows($query_run);
		
			if($query_num_rows==0){
				header("Location: ../login.php");
			}
			else if ($query_num_rows==1){
				$user_name = mysql_result($query, 'user_name');
				$_SESSION['user_name'] = $user_name;
				header("Location: ../computer.php");
			}
			
		}else {
			session_destroy();
			header ("Location: ../login.php");
		}
}else {
	session_destroy();
	header ("Location: ../login.php");
}
*/
?>
