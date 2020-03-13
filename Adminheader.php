	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
	</head>
	<body >
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
	  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" >
	    <span class="navbar-toggler-icon"></span>
	  </button>
		  <div class="collapse navbar-collapse" id="collapse_target">
		  	<span class="navbar-text"></span>&nbsp &nbsp
		  	<a class="navbar-brand" ></a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active ">
		        <a class="nav-link" href="AdminHome.php">All Post<span class="sr-only">(current)</span></a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="">Apply List</a>
		      </li> -->
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Apply List
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="AdminApply.php?category=Seminar">Seminar</a>
		          <a class="dropdown-item" href="AdminApply.php?category=Workshop">Workshop</a>
		          <a class="dropdown-item" href="AdminApply.php?category=Others">Others</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="AdminGallery.php">Gallery</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0" action="logout.php" method="POST">
	      	<input type="submit" class="btn btn-outline-success my-2 my-sm-0 text-light" value="Log Out" role="button"  name="logout">
	    	</form>
		  </div>
		  </nav>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
	</html>