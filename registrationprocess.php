<?php include "Database.php";?>

<?php
	session_start();
	$DB= new registration();

	if (isset($_POST['Registration'])) {

		$fname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];
		$phnumber=$_POST['Phone'];
		$occupation=$_POST['occupation'];
		
		$insertquery = "INSERT INTO reuser(fname,lastname,email,password,phone,occupation) VALUES('$fname','$lastname','$email','$password','$phnumber','$occupation')";

		$DB->reg($insertquery);
	
	} 

?>