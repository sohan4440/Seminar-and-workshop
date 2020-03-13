<?php

	ob_start();
	session_start();
	if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }
	$con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");

    if (isset($_POST['newpost'])) {

        $date=$_POST['date'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $location=$_POST['location'];
        $deadline=$_POST['deadline'];

            $name = $_FILES['file']['name'];
            $target_dir = "post/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);

            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $extensions_arr = array("jpg","jpeg","png","gif");

            if( in_array($imageFileType,$extensions_arr) ){
        
                $insertquery = "INSERT INTO post(date,title,description,image_post,category,location,deadline) VALUES('$date','$title','$description','$name','$category','$location','$deadline')";
                mysqli_query($con,$insertquery);

                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                header('location: AddPost.php');
            }
    
    }


	if (isset($_GET['delete_post'])) {
		$id = $_GET['delete_post'];

            $deletesql="DELETE  FROM post WHERE id='".$id."' ";

            if (mysqli_query($con,$deletesql) ){
                    
                ?>
                <script type="text/javascript">alert("Post Delete Successfully")</script>
                <?php 
                header("refresh:0; url=AdminHome.php") ;
            }
	}