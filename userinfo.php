<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	
	$name=$_POST['Name'];
	$phone=$_POST['Phone'];
	$email=$_POST['email'];
	
	$sql="INSERT INTO userinfo(name,phone,email) values('$name','$phone','$email')";
	if(mysqli_query($con,$sql))
	{
		echo 'data is successfully added';
	}
	else
	{
	
		echo 'data is not added';
	}
}
?>