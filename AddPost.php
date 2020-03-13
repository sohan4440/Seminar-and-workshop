<?php
	ob_start();
	session_start();
	if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
</head>
<body>
	<?php include "Adminheader.php"; ?>
	
	<div class="row justify-content-center">
		<div class="jumbotron col-md-8">
			<form method="post" action="post_process.php" enctype='multipart/form-data'>
				<div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" name="date" id="date" placeholder="Date">
				</div>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
				</div>
				<div class="form-group">
				    <label for="description">Description</label>
				    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
				</div>
				<div class="form-group">
					<label for="image_post">Post Image</label>
					<div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="inputfile" onchange="document.getElementById('Image').src = window.URL.createObjectURL(this.files[0])">
                        <label class="custom-file-label" for="inputfile">Choose Post Image</label>
                    </div>
                    <img id="Image" width="200px" />
				</div>
				<div class="form-group">
				    <label for="category">Category</label>
				    <select name="category" id="category" class="form-control">
				    	<option selected="">--Select Category--</option>
				    	<option value="Seminar">Seminar</option>
				    	<option value="Workshop">Workshop</option>
				    	<option value="Others">Others</option>
				    </select>
				 </div>
				<div class="form-group">
					<label for="location">location</label>
					<input type="text" class="form-control" name="location" id="location" placeholder="Enter location">
				</div>
				<div class="form-group">
				    <label for="deadline">Deadline</label>
				    <input type="date" class="form-control" name="deadline" id="deadline" placeholder="deadline">
				</div>
				<button type="submit" class="btn btn-primary" name="newpost" value="newpost">Add New Post</button>
			</form>

		</div>
	</div>
</body>
</html>
