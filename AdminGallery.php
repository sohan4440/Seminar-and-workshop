<?php

    ob_start();
    session_start();
    if ($_SESSION['email'] == NULL) {
        header('Location: login.php');
    }

    $con=mysqli_connect("localhost","root","","seminar") or die("Error connecting to MySQL Server");
 
        if(isset($_POST['upload_file'])){
            $name = $_FILES['file']['name'];
            $target_dir = "gallery/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);

            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $extensions_arr = array("jpg","jpeg","png","gif");

            if( in_array($imageFileType,$extensions_arr) ){

                $query = "INSERT INTO images(image) VALUES('".$name."')";
                mysqli_query($con,$query);
          
                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                header('location: AdminGallery.php');
            }
        
        }
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];

            $deletesql="DELETE  FROM images WHERE id='".$id."' ";

            if (mysqli_query($con,$deletesql) ){
                    
                ?>
                <script type="text/javascript">alert("Image Delete Successfully")</script>
                <?php 
                header("refresh:0; url=AdminGallery.php") ;
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload File</title>
</head>
<body>
    <?php include "Adminheader.php"; ?>
    <div class="container">
        <div class="row justify-content-center mt-lg-5">
            <div class="col-md-8">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype='multipart/form-data'>  
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="inputfile">
                        <label class="custom-file-label" for="inputfile">Choose file</label>
                      </div>
                      <button class="btn btn-success" type="submit" name="upload_file">Upload</button>
                    </div> 
                </form>
            </div>
        </div><br>
        <div class="row justify-content-center mt-lg-5">
            <div class="col-md-12">
                <div class="card-group">
                    <?php 
                        $sql = "SELECT * from images ";
                        $result = mysqli_query($con,$sql);

                        while($row = $result->fetch_assoc() ) {
                            $image_src = "gallery/".$row['image'];
                            echo '
                                
                                    <div class="card col-md-3">
                                        <img src='.$image_src.' class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title text-left">'.$row['image'].' 
                                                <a class="btn btn-danger" href="AdminGallery.php?delete='.$row['id'].'" class="text-right"><i class="fas fa-trash"></i></a>
                                            </h5>
                                        </div>
                                    </div>
                                
                            ';
                        }
                    ?>
                    </div>
            </div>
        </div>
    </div>
    
    

</body>
</html>
