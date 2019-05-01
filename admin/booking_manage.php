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
                        Booking Management
                        <small>All Bookings</small>
                    </h1>

                    <div class="col-xs-12">

<!--                        <p>-->
<!--                            <a href="vehicle_add_new.php" class="btn btn-lg btn-primary ">Add New Vehicle</a>-->
<!---->
<!--                        </p>-->
                        <?php
                        if($connection){
//print_r($connection) ;
//    $lang = $_GET['lang'];

//$query = "SELECT v.name, v.brand, v.picture_url FROM `vehicle` AS v JOIN `vehicle_description` AS vd ON vd.vehicle_id=v.vehicle_id Where vd.lang='{$lang}'";
                            $query="SELECT * from booking";
                            $select_vehicle = mysqli_query($connection,$query);
//print_r($select_vehicle);


//if(isset($_SESSION['success'])&&$_SESSION['success']==1){
//echo "<div class=\"alert alert-success\">
//<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
//<strong>Success!</strong> Indicates a successful or positive action.
//</div>";
//}
                        }
                        ?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Vehicle ID</th>
                                <th>Package ID</th>
                                <th>Pick Up Address</th>
                                <th>Pickup Date</th>
                                <th>Pickup Time</th>
                                <th>Drop Off Address</th>
                                <th>Drop Off Date</th>
                                <th>Drop Off Time</th>
                                <th>Total Passengers</th>
                                <th>Booking Status</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while($row = mysqli_fetch_assoc($select_vehicle)){

                                echo "<tr>";
                                echo "<td>{$row['user_id'] }</td>";
                                echo "<td>{$row['vehicle_id'] } </td>";
                                if($row['package_code']==null){
                                    echo "<td>Not a Package</td>";
                                }else{
                                    echo "<td>{$row['package_code'] } </td>";
                                }
                                echo "<td>{$row['pickup_city']}, {$row['pickup_street'] }</td>";
                                echo "<td>{$row['pickup_date'] }</td>";
                                echo "<td>{$row['pickup_time'] }</td>";

                                echo "<td>{$row['dropoff_city']}, {$row['dropoff_street'] }</td>";
                                echo "<td>{$row['dropoff_date'] }</td>";
                                echo "<td>{$row['dropoff_time'] }</td>";
                                echo "<td>{$row['passenger_count'] }</td>";

                                echo "<td>";if($row['booking_status']==1): echo "Confirmed"; else: echo "Pending"; endif; echo"</td>";

                                echo "<td><a onclick='return checkBooking()' href='booking_confirmation.php?id={$row['booking_id']}&u_id={$row['user_id']}' class='btn btn-primary'>Confirm Booking</a>
                                     <br><br><a href='booking_confirmation.php?user_id={$row['user_id']}' class='btn btn-primary'>View Customer</a>
                                     </td>";
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
    <script type='text/javascript'>

        function checkBooking()
        {
            //alert("Do you want ko confirm booking?");
            var answer=confirm("Do you want ko confirm booking?");


            if (answer==true){
                return true;
            }else{
                return false;
            }
        }

    </script>

    <?php include_once ('includes/footer.php')?>
