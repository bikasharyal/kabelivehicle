<?php include_once ('includes/header.php')?>
<?php
if(isset($_POST['submit'])){

//print_r($_POST);
    //echo $_POST['street'];

    // Query for vehicle information.


    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["picture"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    exit();

    $query1 = "Insert Into `vehicle` values ('".$_POST['vehicle_id']."','kb','".$_POST['brand']."','".$_POST['model_name']."','".$_POST['picture_url']."')";

    $add_vehicle = mysqli_query($connection,$query1); //Query1 execution.

    if(!$add_vehicle ){
        die("QUERY FAILED: ".mysqli_error($connection));
    }else{
        $_SESSION['company_update_success'] = 1;

        header("Location: vehicle_add_new_description.php?id=".$_POST['vehicle_id']);
//        header("Location: vehicle_add_new_description.php");
        exit();

    }
}


?>

<div id="wrapper">


    <!-- Navigation -->
    <?php include_once ('includes/navigation.php')?>



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Vehicle Management
                        <small>Add New Vehicle</small>
                    </h1>


                    <div class="col-xs-6">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="">Vehicle Id (Number Plate):</label>
                                <input type="text" name="vehicle_id" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="brand" required="required" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label for="">Model Name</label>
                                <input type="text" name="model_name" required="required" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Picture URL</label>
                                <input type="text" name="picture_url" required="required" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Upload Picture</label>
                                <input type="file" name="picture" id="picture" required="required" class="form-control" >
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-lg btn-primary form-control"  name="submit" >Submit</button>
                            </div>

                        </form>

                    </div>





                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->



    <!-- Footer -->

    <?php include_once ('includes/footer.php')?>
