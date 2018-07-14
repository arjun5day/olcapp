<?php
session_start();
require_once("../includes/database.php");

if (isset($_SESSION['user_name'])){
	
	if (isset($_POST['admit'])){
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
		
		
		$admit_query = "INSERT INTO tbl_computers (first_name, middle_name, last_name, address, email, gender, dob, contact_no, joined_date, course, total_fee, paid_fee, due_payment_date) VALUES ('$first_name', '$middle_name', '$last_name', '$address', '$email', '$gender', '$cdob', '$contact_no', '$cjd', '$course', '$amount_to_pay', '$amount_paid', '$cdue_pay_date')";
		if(mysqli_query($connection, $admit_query)){
		echo "<script> alert ('student has been admited')</script>";
		echo "<script> window.open('../computer.php', '_self')</script>";

	
		}
		else{
			echo "could not admited";
		}
	
	}
	}else{
		session_destroy();
		header ("Location: ../login.php");
	}
?>