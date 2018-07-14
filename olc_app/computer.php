<?php
include_once("includes/database.php");
session_start();

if (isset($_SESSION['user_name'])){
$user_name = $_SESSION['user_name'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>computer admision</title>
<link href="style/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/appstyle.css">

    <script type="text/javascript">

//function to validate computer student form

			function validatecs(){
				var first_name = document.getElementById("first_name");
				var last_name = document.getElementById("last_name");
				var address = document.getElementById("address");				
				var email = document.getElementById("email");
				
				var male = document.getElementById("male").checked;
				var female = document.getElementById("female").checked;

								
				var dob = document.getElementById("dob");
				var contact_no = document.getElementById("contact_no");
				var jd = document.getElementById("jd");
				var course = document.getElementById("course");
				var amount_to_pay = document.getElementById("amount_to_pay");
				var amount_paid = document.getElementById("amount_paid");
				var due_pay_date = document.getElementById("due_pay_date");
				var error = "";
				if(first_name.value== ""){
					error = error +"Please enter student first name. <br>";
					first_name.focus();
				}
				else if(last_name.value== ""){
					error = error +"Please enter last name. <br>";
					last_name.focus();
				}
				else if(address.value== ""){
					error = error +"Please enter address. <br>";
					address.focus();
				}	
				else if (email.value=="") {
					error = error +"Please enter valid email. <br>";
					email.focus();
				}					
				else if (male == false && female == false){
					error = error +"Please select gender . <br>";
				}			
				else if(dob.value== ""){
					error = error +"Please select date of birth. <br>";
					dob.focus();
				}
				else if(contact_no.value== ""){
					error = error +"Please enter contact number. <br>";
					contact_no.focus();
				}
				else if(jd.value== ""){
					error = error +"Please select joined date. <br>";
					jd.focus();
				}
				else if(course.value== "Select course"){
					error = error +"Please select course. <br>";
					course.focus();
				}		
				else if(amount_to_pay.value== ""){
					error = error +"Please enter amount to pay. <br>";
					amount_to_pay.focus();
				}
				else if(amount_paid.value== ""){
					error = error +"Please enter amount paid. <br>";
					amount_paid.focus();
				}
				else if(due_pay_date.value== ""){
					error = error +"Please select due pay date. <br>";
					due_pay_date.focus();
				}		
				if(error != ""){
					document.getElementById("error").innerHTML = error;
					return false;
				}
				return true;
			}
			
// function to check number field			
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}

		</script>
		

</head>

<body>
	<div id="appwrapper">
		<div id="appbanner"> 
			<div class="welcome">Welcome <?php echo ucfirst($user_name), " "; ?><a href="logout.php">Log Out</a></div>
		
		</div><!--appbanner close-->
		<div id="appmenuwrap">
			<div class="appmenu">
				<ul>
					<li><a href="computer.php">Computer</a></li>
					<li><a href="language.php">Language</a></li>
					<li><a href="prepration.php">Prepration</a></li>
					<li><a href="report.php">Report</a></li>
					<li><a href="report.php">Help</a></li>
				</ul>
			</div><!--appmenu close-->
		</div><!--appmenuwrap close-->
		<div id="appbody">
				<div id="computer_tabs">
					<ul>
						<li><a href="#tabs-1">Admision</a></li>
						<li><a href="#tabs-2">display Student</a></li>
					  	<li><a href="#tabs-3">Update Student</a></li>
						<li><a href="#tabs-4">Display Due Student</a></li>
					</ul>

					<div id="tabs-1">
						<div class="appbodyhead">Computer Student Admision:
						</div><!--appbodyhead close-->
						<div class="leftappbody">
							<form action="actions/computer_action.php" method="post" enctype="multipart/form-data" onsubmit="return validatecs();">
							  <table width="445" height="330">
								<tr>
								  <td colspan="2" scope="row"><div align="center"><strong>Student Information </strong><hr></div></td>
								</tr>
								<tr>
								  <td scope="row">First Name:</td>
								  <td><input type="text" name="first_name" id="first_name" value="" class="input" /></td>
							    </tr>
								<tr>
								  <td scope="row">Middle Name:</td>
								  <td><input name="middle_name" type="text" id="middle_name" value="" class="input" /></td>
							    </tr>
								<tr>
								  <td scope="row">Last Name:</td>
								  <td><input name="last_name" type="text" id="last_name" value="" class="input" /></td>
								</tr>
								<tr>
								  <td scope="row">Address:</td>
								  <td><input name="address" type="text" id="address" class="input" /></td>
								</tr>
								<tr>
								  <td scope="row">Email:</td>
								  <td><input name="email" type="text" id="email" class="input" /></td>
							    </tr>
								<tr>
								  <td scope="row">Gender:</td>
								  <td>
									  <input type="radio" name="gender" value="male"  id="male"/>
										Male
									  <br />
									  <input type="radio" name="gender" value="female" id="female"/>
										Female
									  <br />
								  </td>
								</tr>
								<tr>
								  <td scope="row">Date of Birth:</td>
								  <td><input name="dob" type="text" id="dob" class="input" /></td>
								</tr>
								<tr>
								  <td scope="row">Contact No: </td>
								  <td><input name="contact_no" type="text" id="contact_no" onkeypress="return isNumber(event)" class="input" maxlength="10" /></td>
								</tr>
								<tr>
								  <td scope="row">Joined Date: </td>
								  <td><input type="text" name="jd" id="jd" class="input" /></td>
								</tr>
							  </table>
							
					  	</div><!--leftappbody close-->
					  <div class="rightappbody">
					    <table width="445" height="330">
                          <tr>
                            <td colspan="2" scope="row"><div align="center"><strong>Student Course & Fee Information </strong>
                                  <hr />
                            </div></td>
                          </tr>
                          <tr>
                            <td scope="row">Course:</td>
                            <td><select name="course" id="course" class="input">
								<option value="Select course">Select course</option>
								<option value="Basic">Basic</option>
								<option value="Diploma in Computer">Diploma in Computer</option>
								<option value="Office Handling Package">Office Handling Package</option>																
								<option value="Basic Graphic">Basic Graphic</option>
								<option value="Advance Graphic">Advance Graphic</option>																
								<option value="Web Page Designing">Web Page Designing</option>	
								<option value="Web Development">Web Development</option>
								<option value="Computer Hardware">Computer Hardware</option>																
								<option value="Computer Networking">Computer Networking</option>
								<option value="Hardware & Networking">Hardware & Networking</option>																
								<option value="Programming">Programming</option>	
								<option value="Accounting Tally">Accounting Tally</option>
								<option value="Computer Operator">Computer Operator</option>																
								<option value="Video Mixing">Video Mixing</option>
								<option value="Special Package">Special Package</option>																
								<option value="Other">Others...</option>																								
							</select></td>
                          </tr>
                          <tr>
                            <td scope="row">Total Amount to Pay (Rs.): </td>
                            <td><input name="amount_to_pay" type="text" id="amount_to_pay" value="" onkeypress="return isNumber(event)" class="input"/></td>
                          </tr>

                          <tr>
                            <td scope="row">Amount paid (Rs.): </td>
                            <td><input name="amount_paid" type="text" id="amount_paid" value="" onkeypress="return isNumber(event)" class="input"/></td>
                          </tr>
                          <tr>
                            <td scope="row">Due payment Date: </td>
                            <td><p>
                                <label></label>
                                <input name="due_pay_date" type="text" id="due_pay_date" class="input" />
                                <br />
                            </p></td>
                          </tr>
                          <tr>
                            <td colspan="2" scope="row"><div id="error"></div><!--error close--> </td>
                          </tr>
                          <tr>
                            <td><input name="admit" type="submit" id="admit" value="Admit" /></td>
                            <td></td>
                          </tr>
                        </table>
                        </form>
					  </div><!--rightappbody close-->
					</div><!--tab-1 close-->
				<div id="tabs-2">
					<div class="appbodyhead">Computer Student Displaying:</div><!--appbodyhead close-->
					<div class="fullappbody">
					<table border="1px">
						<tr bgcolor="#0E6727" align="center">
							<th>S.No</th>
							<th>Name of student</th>
							<th>Address</th>
							<th>Contact No.</th>
							<th>Joined Date</th>
							<th>Course</th>
						</tr>
						<tr>
						<?php
							$select_cstudents = "SELECT s_no, first_name, middle_name, last_name, address, contact_no, joined_date, course FROM tbl_computers ORDER BY s_no DESC";
							$display_cstudents = mysqli_query($connection, $select_cstudents);
							while ($row=mysqli_fetch_array($display_cstudents)){
							
							$s_no = $row['s_no'];
							$first_name = $row['first_name'];
							$middle_name = $row['middle_name'];
							$last_name = $row['last_name'];
							$address = $row['address'];
							$contact_no = $row['contact_no'];
							$joined_date = $row['joined_date'];																					
							$course = $row['course'];
							
						?>
							<td align="center"><?php echo $s_no ?></td>
							<td><?php echo $first_name. " ". $middle_name . " ".$last_name; ?></td>
							<td><?php echo $address; ?></td>
							<td><?php echo $contact_no; ?></td>
							<td><?php echo $joined_date; ?></td>
							<td><?php echo $course; ?></td>
						</tr>
						<?php } ?>
					</table>
				
					</div><!--fullappbody close-->
				</div><!--tab-2 close-->
				<div id="tabs-3">
                <div class="appbodyhead">Computer Student Update:
				</div><!--appbodyhead close-->
                	<div class="fullappbody">
						<table border="1px">
							<tr bgcolor="#0E6727" align="center">
								<th>S.No</th>
								<th>Name of student</th>
								<th>Address</th>
								<th>Contact No.</th>
								<th>Joined Date</th>
								<th>Course</th>
								<th>Update Student</th>
								<th>Delete Student</th>
							</tr>
							<tr>
							<?php
								$select_cstudents = "SELECT s_no, first_name, middle_name, last_name, address, contact_no, joined_date, course FROM tbl_computers ORDER BY s_no DESC";
								$display_cstudents = mysqli_query($connection, $select_cstudents);
								while ($row=mysqli_fetch_array($display_cstudents)){
								
								$s_no = $row['s_no'];
								$first_name = $row['first_name'];
								$middle_name = $row['middle_name'];
								$last_name = $row['last_name'];
								$address = $row['address'];
								$contact_no = $row['contact_no'];
								$joined_date = $row['joined_date'];																					
								$course = $row['course'];
								
							?>
								<td align="center"><?php echo $s_no ?></td>
								<td><?php echo $first_name. " ". $middle_name . " ".$last_name; ?></td>
								<td><?php echo $address; ?></td>
								<td><?php echo $contact_no; ?></td>
								<td><?php echo $joined_date; ?></td>
								<td><?php echo $course; ?></td>
								<td align="center"><a href="edit_computer.php?cedit=<?php echo $s_no ?>">Update</a></td>
								<td align="center"> <a href="actions/delete_computer.php?cdel=<?php echo $s_no; ?>"> Delete </a></td>
							</tr>
						<?php } ?>
					</table>
					
					</div><!--fullappbody close-->
				</div><!--tab-3 close-->
				<div id="tabs-4">
                <div class="appbodyhead">Display Due Student:
				</div><!--appbodyhead close-->
                	<div class="fullappbody">
						<table border="1px">
							<tr bgcolor="#0E6727" align="center">
								<th>S.No</th>
								<th>Name of student</th>
								<th>Address</th>
								<th>Contact No.</th>
								<th>Joined Date</th>
								<th>Course</th>
								<th>Update Student</th>
								<th>Delete Student</th>
							</tr>
							<tr>
							<?php
								$select_cstudents = "SELECT s_no, first_name, middle_name, last_name, address, contact_no, joined_date, course FROM tbl_computers ORDER BY s_no DESC";
								$display_cstudents = mysqli_query($connection, $select_cstudents);
								while ($row=mysqli_fetch_array($display_cstudents)){
								
								$s_no = $row['s_no'];
								$first_name = $row['first_name'];
								$middle_name = $row['middle_name'];
								$last_name = $row['last_name'];
								$address = $row['address'];
								$contact_no = $row['contact_no'];
								$joined_date = $row['joined_date'];																					
								$course = $row['course'];
								
							?>
								<td align="center"><?php echo $s_no ?></td>
								<td><?php echo $first_name. " ". $middle_name . " ".$last_name; ?></td>
								<td><?php echo $address; ?></td>
								<td><?php echo $contact_no; ?></td>
								<td><?php echo $joined_date; ?></td>
								<td><?php echo $course; ?></td>
								<td align="center"><a href="edit_computer.php?cedit=<?php echo $s_no ?>">Update</a></td>
								<td align="center"> <a href="actions/delete_computer.php?cdel=<?php echo $s_no; ?>"> Delete </a></td>
							</tr>
						<?php } ?>
					</table>
					
					</div><!--fullappbody close-->
				</div><!--tab-4 close-->
			</div><!--computer_tab close-->



	</div><!--appbody close-->
	<div class="appfotter"><hr />application copyright content goes herer<hr /></div><!--appfotter close-->
	
<script src="external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script>
	$( "#computer_tabs" ).tabs();
	
	$( "#dob" ).datepicker({
	inline: true
	

});

	$( "#computer_tabs" ).tabs();
	
	$( "#jd" ).datepicker({
	inline: true
	

});

	$( "#computer_tabs" ).tabs();
	
	$( "#due_pay_date" ).datepicker({
	inline: true
	

});

$( "#dialog-link, #icons li" ).hover(
	function() {
		$( tdis ).addClass( "ui-state-hover" );
	},
	function() {
		$( tdis ).removeClass( "ui-state-hover" );
	}
);
</script>

</div><!--appwrapper close-->
</body>
</html>

<?php }
	else {
		header ("Location: login.php");
	}
?>