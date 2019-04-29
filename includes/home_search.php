
<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title"><?php echo vehicle_search ?></div>
                    <div class="home_search_content">
                        <form  action="includes/home_search_process.php" method="post" class="home_search_form" id="home_search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

<!--                                <select id="adults" name="pickup_city" class="search_input search_input_1" required="required">-->
<!--                                    <option value="">--><?php //echo pickup_city ?><!--</option>-->
<!--                                    <option >Kathmandu</option>-->
<!--                                    <option value="TIA">Pokhara</option>-->
<!--                                </select>-->
<!--                                <input type="text" name="pickup_date" class="search_input search_input_2" id="checkin_date" placeholder="--><?php //echo pickup_date?><!--" required="required">-->
<!--                                <input type="text" name="pickup_time" class="search_input search_input_3 timepicker" placeholder="--><?php //echo pickup_time?><!--" required="required">-->
<!---->
<!--                                <select id="adults" name="dropoff_city" class="search_input search_input_1"  required="required">-->
<!--                                    <option value="">--><?php //echo drop_off_city ?><!--</option>-->
<!--                                    <option >Kathmandu</option>-->
<!--                                    <option value="TIA">Pokhara</option>-->
<!--                                </select>-->
<!--                                <input type="text" name="dropoff_date" class="search_input search_input_2" id="checkout_date" placeholder="--><?php //echo drop_off_date?><!--" required="required">-->
<!--                                <input type="text" name="dropoff_time" class="search_input search_input_3 timepicker" placeholder="--><?php //echo drop_off_time?><!--" required="required">-->

                                <select name="passenger_count" class="search_input search_input_4" required="required">
                                    <option value="" disabled selected ><?php echo passenger_count?></option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option value=5 >5+</option>
                                    <option value=7 >7+</option>
                                </select>

                                <select name="vehicle_type" class="search_input search_input_4" required="required">
                                    <option value="" disabled selected><?php echo vehicle_type?></option>
                                    <option >SUV</option>
                                    <option >Pickup</option>
                                    <option >Sedan</option>
                                    <option >Hatchback</option>
                                    <option >Van/MPV</option>
                                </select>
                                <button class="home_search_button search_input_4" type="submit" name="search_submit"><?php echo search_submit ?></button>
                                <!--                                <button class="home_search_button">search</button>-->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>