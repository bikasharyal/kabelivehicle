<!-- Modal -->
<div class="container">
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bookingModal">Login</button>  -->

    <div class="modal fade" id="bookingModal" role="dialog">
        <div class="modal-dialog modal-lg" style=" margin: 65px !important;">
            <div class="modal-content" style="width:1155px !important;">

                <div class="modal-body" style="padding:10px !important; ">

                    <!-- <div class="login-form"> -->
                    <!--<div class="text-center social-btn">-->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--                    <h6 class="text-center"><strong>Booking Details</strong></h6>-->


                    <div>
                           <img src="<?php echo $_GET['pic']; ?>" style=" height: 300px; weight: 50px; " alt="">
                    </div>
                    <div>
                        <h5><?php echo $_GET['name']; ?></h5>
                        <ul>
                            <li><?php echo $_GET['desc']; ?></li>
                            <li><?php echo $_GET['seat']; ?></li>
                        </ul>
                    </div>


                    <!-- Booking Inputs -->
                    <div class="booking_input_container">

                        <div class="home_search_title">Give us your details</div>
                        <div class="home_search_content">
                            <form action="#" class="home_search_form" id="home_search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <select id="adults" name="pickup_city" class="search_input search_input_1" required="required">
                                        <option value=""><?php echo pickup_city ?></option>
                                        <option >Kathmandu</option>
                                        <option value="TIA">Tribhuvan Airport</option>
                                    </select>
                                    <input type="text" name="pickup_date" class="search_input search_input_2" id="checkin_date" placeholder="<?php echo pickup_date?>" required="required">
                                    <input type="text" name="pickup_time" class="search_input search_input_3 timepicker" placeholder="<?php echo pickup_time?>" required="required">

                                    <select id="adults" name="dropoff_city" class="search_input search_input_1"  required="required">
                                        <option value=""><?php echo drop_off_city ?></option>
                                        <option >Kathmandu</option>
                                        <option value="TIA">Tribhuvan Airport</option>
                                    </select>
                                    <input type="text" name="dropoff_date" class="search_input search_input_2" id="checkout_date" placeholder="<?php echo drop_off_date?>" required="required">
                                    <input type="text" name="dropoff_time" class="search_input search_input_3 timepicker" placeholder="<?php echo drop_off_time?>" required="required">

                                    <select name="passenger_count" class="search_input search_input_1" required="required">
                                        <option value="" disabled selected ><?php echo passenger_count?></option>
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option value=5 >5+</option>
                                        <option value=7 >7+</option>
                                    </select>

                                </div>
                                <button class="home_search_button " type="submit" name="search_submit" style=" height:52px !important; width: 300px !important;" >Continue Reservation</button>
                            </form>
                        </div>
                        <!-- Booking Inputs ends -->

                    </div>


<!--                    <div class="hint-text-middle small">-->
<!--                        </br>Want to Login? &nbsp;<a  href="#" class="text-primary" data-dismiss ="modal" data-toggle="modal" data-target="#LoginModal">Login Now</a>-->
<!--                    </div>-->
                    <!-- </div> -->



                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

</div>
