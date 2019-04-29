<?php include_once('includes/header.php') ?>
<?php
if(isset($_POST['submit'])){

//print_r($_POST);

    // Query for TO Insert package information.
    $query1 = "Insert Into `packages` values ('".$_POST['package_code']."','".$_POST['vehicle_id']."','".$_POST['package_title']."','".$_POST['rate']."','".$_POST['picture_url']."')";

    $add_vehicle = mysqli_query($connection,$query1); //Query1 execution.

    if(!$add_vehicle ){
        die("QUERY FAILED: ".mysqli_error($connection));
    }else{
        $_SESSION['company_update_success'] = 1;

        header("Location: package_add_new_description.php?id=".$_POST['package_code']."&& vid=".$_POST['vehicle_id']);

        exit();

    }
}

?>

<div id="wrapper">


    <!-- Navigation -->
    <?php include_once('includes/navigation.php') ?>



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Package Management
                        <small>Add New Vehicle Package</small>
                    </h1>


                    <div class="col-xs-6">
<?php
if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];
//$query = "SELECT v.name, v.brand, v.picture_url FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id Where vd.lang='{$lang}'";
$query="SELECT vehicle_id from `vehicle`";
$select_vehicle = mysqli_query($connection,$query);
//print_r($select_vehicle);

}
?>

                        <form action="" method="post">

                            <div class="form-group">
                                <label for="">Package Code:</label>
                                <input type="text" name="package_code" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Select Vehicle for the Package</label>
                                <select name="vehicle_id" required="required" class="form-control">
<?php
while($row = mysqli_fetch_assoc($select_vehicle)){

                                    echo "<option >{$row['vehicle_id']}</option>";
}
?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Package Title</label>
                                <input type="text" name="package_title" required="required" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label for="">Rate</label>
                                <input type="text" name="rate" required="required" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Picture URL</label>
                                <input type="text" name="picture_url" required="required" class="form-control" >
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

    <?php include_once('includes/footer.php') ?>
