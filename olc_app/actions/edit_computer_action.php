<?php
session_start();
require_once("../includes/database.php");

if (isset($_SESSION['user_name'])){
	
	if (isset($_POST['update'])){
		$s_no = $_POST['s_no'];
		$first_name = ucfirst($_POST['first_name']);
		$middle_name = ucfirst($_POST['middle_name']);
		$last_name = ucfirst($_POST['last_name']);
		$address = ucfirst($_POST['address']);
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];	
		$cdob = date("y-m-d", strtotime($dob));
		
		$contact_no = $_POST['contact_no'];
		$jd = $_POST['jd'];
		$cjd = date("y-m-d", strtotime($jd));
			
		$course = $_POST['course'];
		$amount_to_pay = $_POST['amount_to_pay'];
		$amount_paid = $_POST['amount_paid'];
		$due_pay_date = $_POST['due_pay_date'];
		$cdue_pay_date = date("y-m-d", strtotime($due_pay_date));
		
		
		$update_query = "UPDATE tbl_computers SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', address = '$address', email = '$email', gender = '$gender', dob = '$cdob', contact_no = '$contact_no', joined_date ='$cjd', course = '$course', total_fee = '$amount_to_pay', paid_fee = '$amount_paid', due_payment_date = '$cdue_pay_date' WHERE s_no = '$s_no'";
		if(mysqli_query($connection, $update_query)){
		echo "<script> alert ('student has been updated')</script>";
		echo "<script> window.open('../computer.php', '_self')</script>";	
		}
		else{
			echo "could not Admited";
		}
	
	}
	}else{
		session_destroy();
		header ("Location: ../login.php");
	}
?>