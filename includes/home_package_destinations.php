<?php
    //lang_switcher.php --> .
    //function.php --> it contains various functions.
    //db_connection.php --> it contains base url and database connection configurations.
    // these files has been called in header.php
    $package_info = Get_Vehicle_Packages($connection);
?>
<div class="destinations" id="destinations">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col text-center">
                <div class="section_subtitle"><?php echo package_subtitle ?></div>
                <div class="section_title"><h2><?php echo package_title ?></h2></div>
            </div>
        </div>
        <div class="row destinations_row" >
            <div class="col">
                <div class="destinations_container item_grid" >

                    <!-- Destination
                    <div class="destination item" data-aos="fade-up" data-aos-delay="200">
                        <div class="destination_image">
                            <img src="images/destination_1.jpg" alt="">
                            <div class="spec_offer text-center"><a href="#"><?php //echo special_offer ?></a></div>
                        </div>
                        <div class="destination_content">
                            <div class="destination_title"><a href="destinations.php">Bali</a></div>
                            <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                            <div class="destination_price">From $679</div>
                        </div>
                    </div>-->
<?php
if(mysqli_num_rows($package_info)):
    $aos_count = 100;
while ($package_rows = mysqli_fetch_assoc($package_info)):
    $aos_count = $aos_count+100;
?>

                    <!-- Destination -->
                    <div class="destination item" data-aos="fade-up" data-aos-delay="<?php echo $aos_count; ?>" >
                        <div class="destination_image">
                            <img src="<?php echo BASE_URL.$package_rows['picture_url'];?>" alt="">
                        </div>
                        <div class="destination_content">
                            <div class="destination_title"><a href="#"><?php echo $package_rows['package_title'];?></a></div>
                            <div class="destination_subtitle"><p><?php echo $package_rows['brand']." - ".$package_rows['name'];?></p></div>
                            <div class="destination_subtitle"><p>Total Seats: <?php echo $package_rows['no_of_seats'];?></p></div>
                            <div class="destination_subtitle"><p><?php echo $package_rows['description'];?></p></div>
                            <div class="destination_price">For $<?php echo $package_rows['rate'];?></div>
                        </div>
                        </br><div style= "float: left;"><a href="package_booking.php?p_id=<?php echo $package_rows['package_code'];?>"> <button class="button load_more_button"> Reserve Now </button></a></div>
                        <div style= "float: left;"><a href="package_transaction_point.php?p_id=<?php echo $package_rows['package_code'];?>"> <button class="button load_more_button"> Rent Now </button></a></div>
                        <!--                                <div class="button load_more_button"><a href="#" data-toggle="modal" data-target="#bookingModal">Book Now</a></div>-->
                        <div style="clear:both;"></div>
                    </div>

<?php
endwhile;
else: echo "<h4> No Packages found.</h4>";
endif;
?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_GET['login_status'])) :

    if ($_GET['login_status'] =='false'): ?>

        <script>
            alert("You must be logged in to Rent or Reserve a vehicle package !");
        </script>

    <?php endif; endif;
?>