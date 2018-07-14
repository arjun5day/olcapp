

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to login page</title>
<link rel="stylesheet" type="text/css" href="style/appstyle.css">


    <script type="text/javascript">
			function validate(){
				var user_name = document.getElementById("user_name");
				var user_password = document.getElementById("user_password");
				var error = "";
				if(user_name.value== ""){
					error = error +"Please enter username <br>";
				}
				if(user_password.value== ""){
					error = error +"Please enter password <br>";
				}
				if(error != ""){
					document.getElementById("error").innerHTML = error;
					return false;
				}
				return true;
			}
		</script>
        
</head>

<body>
	<div id="appwrapper">
		<div id="appbanner">
		</div>
		<!--apbanner close-->
			<div class="login">
				<form method="post" action="<?php echo 'actions/login_action.php' ?>" onsubmit="return validate();">
				  <div align="center"></div>
				  <table width="519" align="center">
					  <tr>
						<td colspan="2" align="center"><h3><u>Application Login</u></h3></td>
					  </tr>
					  <tr>
						<td width="123">User Name: </td>
						<td width="361">						  <input type="text" id="user_name" name="user_name" value="" size="30" class="input"/>					    </td>
					  </tr>
					  <tr>
						<td>Password:</td>
						<td>
					      <input type="password" id="user_password" name="user_password" value="" size="30" class="input" />
							<input type="checkbox" id="show_password_check" />
						Show password<br />                          <div id="error" style="color:#FF0000;"></div>						</td>
					  </tr>
                      
					  <tr>
						<td>						  <input type="submit" value="Login" id="login" name="login" />						  </td>
						<td><a href="../index.php">cancel</a></td>
					</tr>
				  </table>		
				</form>	
			</div><!--login class close-->
			<div class="app_fotter">
				<hr />
				copyright content goes here
				<hr />
				<div style="text-align:right">developed by <a href="http://pandayarjun.com.np/">Arjun panday</div></a>
			</div><!--footer class close-->
	</div><!-- appwrapper close-->
	<script type="text/javascript" src="jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="jquery/jsfunction.js"></script>
</body>
</html>
