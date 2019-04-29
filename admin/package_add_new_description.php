<?php include_once ('includes/header.php')?>

<?php
if(isset($_POST['submit'])){
    //print_r($_POST); echo "</br>";
    //var_dump($_POST['vehicle_id']);
    //Queries for multiple language descriptions ie. english and spanish.
    $query = "Insert Into `package_description` (package_code,description,lang) values ('".$_POST['package_code']."','".$_POST['description']."','".$_POST['lang']."')";
    $add_vehicle_desc= mysqli_query($connection,$query);


    if(!$add_vehicle_desc){
        die("QUERY FAILED! at inserting phase : ".mysqli_error($connection));
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
                        Package Management
                        <small>Add New Package Description</small>
                    </h1>


                    <div class="col-xs-12">
<?php
if($connection){
    //print_r($connection) ;
    //    $lang = $_GET['lang'];
    $get_package_code = $_GET['id'];
    $get_vehicle_id = $_GET['vid'];
    //$query = "SELECT v.name, v.brand, v.picture_url FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id Where vd.lang='{$lang}'";
    $query="SELECT package_code,vehicle_id,package_title, rate, picture_url from `packages` where package_code='{$get_package_code}'";
    $select_package = mysqli_query($connection,$query);


    $query2="SELECT picture_url from `vehicle` where vehicle_id='{$get_vehicle_id}'";
    $select_vehicle_picture = mysqli_query($connection,$query2);
    //print_r($select_vehicle);

}

?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Package Code</th>
                                <th>Package Picture</th>
                                <th>Package Title</th>
                                <th>Rate</th>
                                <th>Vehicle Id</th>
                                <th>Vehicle Picture</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $row = mysqli_fetch_assoc($select_package);
                            $vehicle_url = mysqli_fetch_assoc($select_vehicle_picture);
                                echo "<tr>";

                                echo "<td>{$row['package_code'] }</td>";
                                echo "<td> <img src='{$row['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";
                                echo "<td>{$row['package_title'] }</td>";
                                echo "<td>{$row['rate'] }</td>";

                                echo "<td>{$row['vehicle_id'] }</td>";
                                echo "<td> <img src='{$vehicle_url['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";

                                echo "</tr>";


                            ?>

                            </tbody>
                        </table>

                    </div>
                    <div class="col-xs-6">
                        <form action="package_add_new_description.php?<?php echo 'id='.$get_package_code.'&& vid='.$get_vehicle_id; ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="package_code"  required="required" class="form-control" value="<?php echo $get_package_code ?>">

                            </div>
                            <div class="form-group">
                                <label for="">Select Language </label>
                                <select name="lang" required="required" class="form-control">
                                    <option value="en">English</option>
                                    <option value="es">Spanish</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Description: </label>
                                <input type="text" name="description" required="required" class="form-control">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="form-control btn-lg btn-primary"  name="submit" >Submit</button>
                            </div>
                        </form>

                    </div>



                    <!--Vehicle Description table -->
                    <div class="col-xs-12">
<?php
if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];

    $query = "SELECT description, lang FROM `package_description` where package_code='{$get_package_code}' ";

    $select_package_desc = mysqli_query($connection,$query);
//print_r($select_vehicle);

}
if(mysqli_num_rows($select_package_desc)):
?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>Description</th>
                                    <th>Language</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                while($row = mysqli_fetch_assoc($select_package_desc)){

                                    echo "<tr>";

                                    echo "<td>{$row['description'] }</td>";
                                    echo "<td>{$row['lang'] }</td>";

                                    echo "</tr>";

                                }
                                ?>

                                </tbody>
                            </table>

                        <?php endif ?>

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
