<!DOCTYPE html>
<html>
<head>
	<title>Login hare</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<marquee direction="right" style="color:yellow">
		Welcome to SEMINAR AND WORKSHOP!!!
	</marquee>
	<link rel="shortcut icon" type="image/jpg" href="img/Second.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/others.css">
</head>
<body class="bg-info">
	<div class="container-fluid">
		<div class="row justify-content-center mt-xl-5">
			<div class="col-md-4">
				<div class="jumbotron">
					<h2 class="text-center">Login hare</h2>
					<form action="signinprocess.php" method="POST">
						<div class="form-group hover">
							<label for="validationServer">Email</label>
							<input type="email" class="form-control" id="validationServer" name="email" placeholder="email" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password" required>
						</div></br>
						<button type="submit" class="btn btn-success btn-block" name="signin" >Sign in</button></br>
						<div class="row ">
							<div class="signuprow">
								<a class="nav-link" href="registration.html" >Don't have an account?</a>
							</div>
						</div>	  
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
