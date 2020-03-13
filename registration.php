<!DOCTYPE html>
<html>
<head>
	<title>
		Registration here
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color: #7fadd6ba!important">
	<div class="container">
		<div class="row justify-content-center mt-xl-5">
			<div class="col-md-7">
				<h2 class="text-center">Registration here</h2><br><br>
				<div class="jumbotron">
					<form action="registrationprocess.php" method="POST">
						<input class="form-control" type="text" name="firstname" placeholder="Enter the first name" required><br>
						<input class="form-control" type="text" name="lastname" placeholder="Enter the Lastname" required><br>
						<input class="form-control" type="email" name="Email" placeholder="Enter the Email" required><br>
						<input class="form-control" type="password" name="Password" placeholder="Enter the Password" required><br>
						<input class="form-control" type="text" placeholder="Enter phone number" name="Phone" required><br>
						<select class="form-control" name="occupation" >
							<option >Occupation</option>
							<option value="Student">Student</option>
							<option value="Employee">Employee</option>
							<option value="other">Other</option>
						</select><br><br>
						<input type="submit" class="btn btn-success btn-block" value="Registration" name="Registration">
					</form>
				</div>
			</div>
		<div>
	<div>

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
