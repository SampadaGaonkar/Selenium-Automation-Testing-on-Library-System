<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	
	$email= mysqli_real_escape_string($mysqli, $_POST['email']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$num = mysqli_real_escape_string($mysqli, $_POST['num']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);	
	
	// checking empty fields
	if(empty($name) || empty($num) || empty($password)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($num)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE libraryregister SET name='$name',num='$num',password='$password' WHERE email='$email'");
		
		
		echo '<script type="text/javascript">'; 
       echo 'alert("Your account has been updated");'; 
       
       echo '</script>';


	}
}
?>