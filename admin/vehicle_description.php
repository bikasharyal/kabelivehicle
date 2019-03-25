<?php include_once ('includes/header.php')?>

<div id="wrapper">


    <!-- Navigation -->
    <?php include_once ('includes/navigation.php')?>

<?php




?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Vehicle Management
                        <small>Description</small>
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
                            while($row = mysqli_fetch_assoc($select_vehicle)){

                                echo "<tr>";
                                    echo "<td>{$row['vehicle_id'] }</td>";
                                    echo "<td>{$row['name'] }</td>";
                                    echo "<td>{$row['brand'] }</td>";
                                    echo "<td> <img src='{$row['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";
                                echo "</tr>";

                            }
                            ?>

                            </tbody>
                        </table>

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
?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Type</th>
                                <th>Description</th>
                                <th>Language</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while($row = mysqli_fetch_assoc($select_vehicle)){

                                echo "<tr>";
                                echo "<td>{$row['type'] }</td>";
                                echo "<td>{$row['description'] }</td>";
                                echo "<td>{$row['lang'] }</td>";
                                echo "<td><a href='edit_vehicle_description.php?id={$row['vehicle_id']},lang={$row['lang']}' class='btn btn-primary'>Edit</a> </td>";

                                echo "</tr>";

                            }
                            ?>

                            </tbody>
                        </table>

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
