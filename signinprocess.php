<?php 
	include "Database.php";
	session_start();
    $DB= new login();


    if (isset($_POST['signin'])) {

        $_SESSION['email']=$_POST["email"];
        $_SESSION['password']=$_POST["password"];

        $selectquery="SELECT* FROM reuser WHERE email ='".$_SESSION['email']."' && password ='".$_SESSION['password']."' ";

        $DB->signIn($selectquery);
    }
?>
