<?php
    ob_start();
    session_start();
    if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }
 
    $date=$title=$description=$category=$image_post=$location=$deadline='';
 
    $con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");
 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
 
        $result=mysqli_query($con, "SELECT * FROM post WHERE id='".$id."' ");
 
        if ((mysqli_num_rows($result)>0)) {
 
            if($row = mysqli_fetch_array($result) ) {
                $id=$row['id'];
                $date=$row['date'];
                $title=$row['title'];
                $description=$row['description'];
                $image_post=$row['image_post'];
                $category=$row['category'];
                $location=$row['location'];
                $deadline=$row['deadline'];
            }
        }
        else{
            ?>
            <script type="text/javascript">alert("Information Not Available")</script>
            <?php 
            header("Location:AdminHome.php.php") ;
        }
    }
    if (isset($_POST['update'])) {
 
        $date=$_POST['date'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $location=$_POST['location'];
        $deadline=$_POST['deadline'];
        
 
        $editsql="UPDATE post SET date='".$date."',title='".$title."',description='".$description."',category='".$category."',location='".$location."',deadline='".$deadline."' WHERE id='".$_POST['id']."' ";
        if (mysqli_query($con,$editsql)) {
                ?>
                <script type="text/javascript">alert("SignUp User Information Update Successfully")</script>
                <?php
                header("Location: AdminHome.php") ;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <?php include "Adminheader.php"; ?>
        <div class="row justify-content-center">
        <div class="jumbotron col-md-8">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype='multipart/form-data'>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" id="date" value="<?php echo $date;?>">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="<?php echo $title;?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="<?php echo $description;?>">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="Seminar" <?php if($category=="Seminar") echo 'selected="selected"'; ?>>Seminar</option>
                        <option value="Workshop" <?php if($category=="Workshop") echo 'selected="selected"'; ?>>Workshop</option>
                        <option value="Others" <?php if($category=="Others") echo 'selected="selected"'; ?>>Others</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="location">location</label>
                    <input type="text" class="form-control" name="location" id="location" value="<?php echo $location;?>">
                </div>
                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input type="date" class="form-control" name="deadline" id="deadline" value="<?php echo $deadline;?>">
                </div>
                <button type="submit" class="btn btn-primary" name="update" value="update">Update Post</button>
            </form>

        </div>
    </div>
</body>
</html>