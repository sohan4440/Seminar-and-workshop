<?php
	ob_start();
	session_start();
	if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }
	$con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");
	if (isset($_GET['category'])) {
		$category = $_GET['category'];
		$result=mysqli_query($con, "SELECT * FROM apply WHERE category='".$category."' ");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply List</title>
</head>
<body>
	<?php include "Adminheader.php"; ?>
	<div class="jumbotron">
		<div class="table-responsive" style=" border-radius: 10px;">
			<table class="table table-striped table-bordered table-sm table-hover" style=" border-radius: 15px;">
				<thead >
					<tr>
						<th class ="col-md-auto text-center">Id</th>
						<th class ="col-md-auto text-center">First Name</th>
						<th class ="col-md-auto text-center">Last name</th>
						<th class ="col-md-auto text-center">Email</th>
						<th class ="col-md-auto text-center">Phone</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($row = $result->fetch_assoc() ) {
						echo '
						<tr>
						<td class="row-md-auto text-center float-md">'.$row['id'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['fname'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['lastname'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['email'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['phone'].'</td>
						</tr>
						';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
