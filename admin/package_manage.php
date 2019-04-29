<?php include_once ('includes/header.php')?>

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
                        <small>All Vehicle Packages</small>
                    </h1>

                    <div class="col-xs-12">

                        <p>
                            <a href="package_add_new.php" class="btn btn-lg btn-primary ">Add New Package</a>

                        </p>
<?php
if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];

//$query = "SELECT v.name, v.brand, v.picture_url FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id Where vd.lang='{$lang}'";
$query="SELECT package_code, vehicle_id, package_title, rate, picture_url from `packages`";
$select_vehicle = mysqli_query($connection,$query);
//print_r($select_vehicle);

//if(isset($_SESSION['success'])&&$_SESSION['success']==1){
//    echo "<div class=\"alert alert-success\">
//<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
//<strong>Success!</strong> successful action.
//</div>";
//}
}
?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Package Code</th>
                                <th>Vehicle Id</th>
                                <th>Package Title</th>
                                <th>Rate</th>
                                <th>Picture URL</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while($row = mysqli_fetch_assoc($select_vehicle)){

                                echo "<tr>";

                                echo "<td>{$row['package_code'] }</td>";
                                echo "<td>{$row['vehicle_id'] }</td>";
                                echo "<td>{$row['package_title'] }</td>";
                                echo "<td>{$row['rate'] }</td>";
                                echo "<td> <img src='{$row['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";
                                echo "<td><a href='package_description.php?id={$row['package_code']}' class='btn btn-primary'>View Description</a> </td>";
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
