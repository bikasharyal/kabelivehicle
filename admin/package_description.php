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
                        <small>Description</small>
                    </h1>

                    <div class="col-xs-12">
<?php
if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];
    $get_package_code = $_GET['id'];
    $query="SELECT package_code, vehicle_id, package_title, rate, picture_url from `packages` where package_code='{$get_package_code}'";
    $select_package = mysqli_query($connection,$query);
//print_r($select_vehicle);

}
?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Package_code</th>
                                <th>Vehicle Id</th>
                                <th>Package Title</th>
                                <th>Rate</th>
                                <th>Package Picture</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $row = mysqli_fetch_assoc($select_package);

                                echo "<tr>";
                                echo "<td>{$row['package_code'] }</td>";
                                echo "<td>{$row['vehicle_id'] }</td>";
                                echo "<td>{$row['package_title'] }</td>";
                                echo "<td>{$row['rate'] }</td>";
                                echo "<td> <img src='".BASE_URL."{$row['picture_url'] }' alt='' style='width: 280px; height: 200px;'></td>";
                                echo "</tr>";

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

    $query = "SELECT description,lang FROM  `package_description` where package_code ='{$get_package_code}' ";

    $select_package_des = mysqli_query($connection,$query);
//print_r($select_vehicle);

}
?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Description</th>
                                <th>Language</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while($row = mysqli_fetch_assoc($select_package_des)){

                                echo "<tr>";
                                echo "<td>{$row['description'] }</td>";
                                echo "<td>{$row['lang'] }</td>";
                                echo "<td><a href='package_description_edit.php?id={$get_package_code},lang={$row['lang']}' class='btn btn-primary'>Edit</a>
                                <a href='package_description_edit.php?id={$get_package_code},lang={$row['lang']}' class='btn btn-primary'>Delete</a> </td>";

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
