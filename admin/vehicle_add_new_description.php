<?php include_once ('includes/header.php')?>

<?php
if(isset($_POST['submit'])){
    //print_r($_POST); echo "</br>";
    //var_dump($_POST['vehicle_id']);
    //Queries for multiple language descriptions ie. english and spanish.
    $query = "Insert Into `vehicle_description` (id,vehicle_id,type,description,lang) values (NULL,'".$_POST['vehicle_id']."','".$_POST['type']."','".$_POST['description']."','".$_POST['lang']."')";
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
                        Vehicle Management
                        <small>Add New Vehicle's Description</small>
                    </h1>


                    <div class="col-xs-12">
<?php
if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];
    $get_vehicle_id = $_GET['id'];
    //$query = "SELECT v.name, v.brand, v.picture_url FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id Where vd.lang='{$lang}'";
    $query="SELECT vehicle_id,name, brand, picture_url from `vehicle` where vehicle_id='{$get_vehicle_id}'";
    $select_vehicle = mysqli_query($connection,$query);
//print_r($select_vehicle);

}

?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Vehicle Id</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Picture</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $row = mysqli_fetch_assoc($select_vehicle);

                                echo "<tr>";
                                echo "<td>{$row['vehicle_id'] }</td>";
                                echo "<td>{$row['name'] }</td>";
                                echo "<td>{$row['brand'] }</td>";
                                echo "<td> <img src='{$row['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";
                                echo "</tr>";


                            ?>

                            </tbody>
                        </table>

                    </div>
                    <div class="col-xs-6">
                        <form action="vehicle_add_new_description.php?id=<?php echo $get_vehicle_id ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="vehicle_id"  required="required" class="form-control" value="<?php echo $get_vehicle_id ?>">

                            </div>
                            <div class="form-group">
                                <label for="">Select Language </label>
                                <select name="lang" required="required" class="form-control">
                                    <option value="en">English</option>
                                    <option value="es">Spanish</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">Vehicle Type: </label>
                                <input type="text" name="type" required="required" class="form-control">

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

$query = "SELECT vd.vehicle_id,vd.type, vd.description, vd.lang FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id where v.vehicle_id='{$get_vehicle_id}' ";

$select_vehicle = mysqli_query($connection,$query);
//print_r($select_vehicle);

}
if(mysqli_num_rows($select_vehicle)):
?>



                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Type</th>
                                <th>Description</th>
                                <th>Language</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while($row = mysqli_fetch_assoc($select_vehicle)){

                                echo "<tr>";
                                echo "<td>{$row['type'] }</td>";
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
