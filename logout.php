<?php
		if (isset($_POST['logout'])) {

			session_start(); //to ensure you are using same session
			session_destroy(); //destroy the session
			header("location:index.php"); //to redirect back to "index.php" after logging out
			exit();
			
		}else{

        	header("location: ". $_SERVER["HTTP_REFERER"]);

        }
?>