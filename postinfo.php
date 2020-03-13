<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	$id=$_POST['ID'];
	$date=$_POST['date'];
	$title=$_POST['Title'];
	$category=$_POST['Category'];
	$location=$_POST['Location'];
	$deadline=$_POST['deadline'];

	$sql="INSERT INTO post(id,date,title,category,location,deadline) values('$id','$date','$title','$category','$location','$deadline')";
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