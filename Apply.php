<?php
	session_start();
	$con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");
 

	if (isset($_POST['apply'])) {

		$fname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['Email'];
		$phnumber=$_POST['Phone'];
		$category=$_POST['category'];
		
		$userCheck = mysqli_query($con, "SELECT * FROM apply WHERE email='".$email."' && category='".$category."' ");
		$row = $userCheck->fetch_assoc();
        
        if (empty($row['email']) && empty($row['category'])){
        	$insertquery = "INSERT INTO apply(fname,lastname,email,phone,category) VALUES('$fname','$lastname','$email','$phnumber','$category')";

        	mysqli_query($con,$insertquery);
          
        	header('location: index.php');

        }else {
        	     
            ?>
            <script type="text/javascript">alert("Already Applied")</script>
            <?php 
            header("refresh:0; url=Apply.php?category=$category") ;
        }
	
	} 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/others.css">
    <title>Apply</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
  	<div class="container">
	  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		  <a class="navbar-brand" href="index.php">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="Gallery.php">Gallery</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <!-- <a class="btn btn-info mr-sm-2" href="registration.php">Registration</a> -->
			  <a class="btn btn-success" href="login.php">Login</a>
		    </form>
		  </div>
		</nav><br>
		<div class="jumbotron">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<form action="Apply.php" method="POST">
						<input class="form-control" type="text" name="firstname" placeholder="Enter the first name" required><br>
						<input class="form-control" type="text" name="lastname" placeholder="Enter the Lastname" required><br>
						<input class="form-control" type="email" name="Email" placeholder="Enter the Email" required><br>
						<input class="form-control" type="text" placeholder="Enter phone number" name="Phone" required><br>
						<input type="hidden" name="category" value="<?php echo $_GET['category']; ?>">
						<br><br>
						<input type="submit" class="btn btn-success btn-block" value="apply" name="apply">
					</form>
				</div>				
	        </div>
		</div>
		<div class="row text-center">
			<div class="col-sm-4 fbox ">
				<i class="fas fa-heart fa-2x"></i>
				<h4>Communication with friends</h4>
			</div>
			<div class="col-sm-4 fbox ">
				<i class="fas fa-comment-alt fa-2x"></i>
				<h4>Message with friends</h4>
			</div>
			<div class="col-sm-4 fbox ">
				<i class="fas fa-eye fa-2x"></i>
				<h4>Contact with friends</h4>
			</div>
		</div>
	</div>
    

    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>