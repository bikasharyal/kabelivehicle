<?php
$page=3;
//require_once 'includes/nav_array.php';

include('includes/header.php'); // ---->> function.php has been callesd in header.php file.

$vehicle_results = Get_Vehicle_Info($connection); // calling Get_Vehicle_Info function from function.php

?>

<!-- Body -->
<!--<div  style="weight:100%;height:130px;background-color: #174f86;" >

</div>-->

<div class="home-sub-pages">
    <div class="background_image" style="background-image:url(images/elements.jpg)"></div>
</div>
    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle"><?php echo vehicle_subtitle ?></div>
                    <div class="section_title"><h2><?php echo vehicle_title ?></h2></div>

                </div>
            </div>


            <div class="row destination_sorting_row">
                <div class="col">
                    <div class="destination_sorting d-flex flex-row align-items-start justify-content-start">
                        <div class="sorting">
                            <ul class="item_sorting">
<!--                                <li>-->
<!--                                    <span class="sorting_text">Sort By</span>-->
<!--                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--                                    <ul>-->
<!--                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>-->
<!--                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>-->
<!--                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li>
                                    <span class="sorting_text">Vehicle Type</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                       <a href="vehicles.php?vt=SUV&count=1"> <li class="num_sorting_btn"><span>SUV</span></li></a>
                                        <a href="vehicles.php?vt=Sedan&count=1"> <li class="num_sorting_btn"><span>Sedan</span></li></a>
                                        <a href="vehicles.php?vt=Pickup&count=1"> <li class="num_sorting_btn"><span>Pickup</span></li></a>
                                        <a href="vehicles.php?vt=Hatchback&count=1">  <li class="num_sorting_btn"><span>Hatchback</span></li></a>
                                        <a href="vehicles.php?vt=Van/MVP&count=1"> <li class="num_sorting_btn"><span>Van/MVP</span></li></a>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sort_box ml-auto"><i class="fa fa-th" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>


            <div class="row destinations_row">
                <div class="col">

                    <div class="destinations_container item_grid">

                        <!-- Vehicles -->
<?php
if(mysqli_num_rows($vehicle_results)):
    while ($vehicle_rows = mysqli_fetch_assoc($vehicle_results)):

?>

                        <div class="destination item">
                            <div class="destination_image">
                                <img src="<?php echo BASE_URL.$vehicle_rows['picture_url']?>" alt="" style="height: 270px ; width: 360px;">
<!--                                <div class="spec_offer text-center"><a href="#">Special Offer</a></div>-->
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#"><?php echo $vehicle_rows['name']." - ".$vehicle_rows['brand']?></a></div>
                                <div class="destination_subtitle"><p><?php echo htmlentities($vehicle_rows['description'], ENT_QUOTES, "ISO-8859-1")?></p></div>

                                <div class="destination_price">Per Day Rate: $ <?php echo $vehicle_rows['price_per_day']?></div>

                                <div class="destination_list">
                                    <ul>
                                        <li>Air Condition: <?php if($vehicle_rows['ac_availability']==1){echo "Yes";}else{echo "No";}?></li>
                                        <li>Air Bag: <?php if($vehicle_rows['ac_availability']==1){echo "Yes"; }else{echo "No"; }?></li>
                                        <li>Wifi: <?php if($vehicle_rows['ac_availability']==1){echo "Yes"; }else{echo "No"; }?></li>
                                        <li>With Chauffer: Yes</li>
                                    </ul>
                                </div>
<!--                                 <button class="btn btn-md btn-info" style="width: 160px;">Book Now</button>-->
                                </br><div style= "float: left;"><a href="vehicle_booking.php?v_id=<?php echo $vehicle_rows['vehicle_id'];?>"> <button class="button load_more_button"> Reserve Now </button></a></div>
                                <div style= "float: left;"><a href="transaction_point.php?v_id=<?php echo $vehicle_rows['vehicle_id'];?>"> <button class="button load_more_button"> Rent Now </button></a></div>
<!--                                <div class="button load_more_button"><a href="#" data-toggle="modal" data-target="#bookingModal">Book Now</a></div>-->
                                <div style="clear:both;"></div>
                            </div>
                        </div>
<?php endwhile;?>

                    </div>
                </div>
            </div>
            <div class="row load_more_row" data-aos="fade-right" data-aos-delay="100">
                <div class="col">
                    <div class="" ><a href="#">Load More</a></div>
                </div>
            </div>
<?php else: echo "</div> </div> </div> <h4> No Vehicles found.</h4>"; endif; ?>
        </div>
    </div>

<?php

if(isset($_GET['reg_er_msg'])&& isset($_GET['reg_suc_msg'])){$reg_er_msg = $_GET['reg_er_msg'];$reg_suc_msg = $_GET['reg_suc_msg'];}
if(isset($_GET['lg_er_msg'])){$lg_er_msg = $_GET['lg_er_msg'];}

include('includes/footer.php');

if(isset($_GET['reg'])):
    if ($_GET['reg'] == 0 || $_GET['reg'] == 1): ?>
        <script> $('#RegisterModal').modal('show');</script>
    <?php endif;  endif;

if(isset($_GET['lg'])):
   if ($_GET['lg'] == 0 ) : ?>
        <script> $('#LoginModal').modal('show');</script>
    <?php endif; endif;


if(isset($_GET['login_status'])) :

    if ($_GET['login_status'] =='false'): ?>

        <script>
            alert("You must be logged in to Rent or Reserve a Vehicle !");
        </script>

    <?php endif; endif;

?>
