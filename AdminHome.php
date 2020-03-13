<?php
	ob_start();
	session_start();
	if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }
	$con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");
	$result=mysqli_query($con, "SELECT * FROM post");

?>
<!DOCTYPE html>
<html>
<head>
	<title>All Post</title>
</head>
<body>
	<?php include "Adminheader.php"; ?>
	<div class="jumbotron">
		<div class="table-responsive" style=" border-radius: 10px;">
			<div class="text-right mb-sm-2">
				<a href="AddPost.php" class="btn btn-info">Add Post</a>
			</div>
			<table class="table table-striped table-bordered table-sm table-danger table-hover" style=" border-radius: 15px;">
				<thead class="thead-dark">
					<tr>
						<th class ="col-md-auto text-center">Id</th>
						<th class ="col-md-auto text-center">Date</th>
						<th class ="col-md-auto text-center">Title</th>
						<th class ="col-md-auto text-center">Post Image</th>
						<th class ="col-md-auto text-center">Location</th>
						<th class ="col-md-auto text-center">Deadline</th>
						<th class ="col-md-auto text-center">Action</th> 
					</tr>
				</thead>
				<tbody>
					<?php
					while($row = $result->fetch_assoc() ) {
						$image_src = "post/".$row['image_post'];
						echo '
						<tr>
						<td class="row-md-auto text-center float-md">'.$row['id'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['date'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['title'].'</td>
						<td class="row-md-auto text-center float-md"><img src='.$image_src.' width="50" height="50"></td>
						<td class="row-md-auto text-center float-md">'.$row['location'].'</td>
						<td class="row-md-auto text-center float-md">'.$row['deadline'].'</td>
						<td class="row-md-auto text-center float-md">
						<a class="btn btn-sm btn-warning" href="EditPost.php?edit='.$row['id'].'"><i class="fas fa-edit"></i></a>&nbsp &nbsp
						<a class="btn btn-sm btn-danger" href="post_process.php?delete_post='.$row['id'].'"><i class="fas fa-trash"></i></a>&nbsp
						</td>
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
