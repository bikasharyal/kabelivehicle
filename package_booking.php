<?php
$page=5;
@session_start();
if(!isset($_SESSION['user_token']) && !isset($_SESSION['fb_access_token']) && !isset($_SESSION['g_access_token'])){

    header("Location: index.php?login_status=false");
}

include_once ('includes/header.php'); // db_connection.php, lang_switcher.php and function.php has been called in header.php file.
require_once('includes/payment_config.php'); // including file that contains stripe payment library.

if(isset($_GET['p_id'])){

    $package_id = $_GET['p_id'];
    $selected_package = Get_Vehicle_Packages_Where_con($connection, $package_id); // calling Get_Vehicle_Where_con function from function.php
    $selected_package_row = mysqli_fetch_array($selected_package);
}

if(isset($_POST['info_submit'])){

    $package_id = mysqli_real_escape_string($connection,$_POST['package_id']);
    $vehicle_id = mysqli_real_escape_string($connection,$_POST['vehicle_id']);
    $pickup_city = mysqli_real_escape_string($connection,$_POST['pickup_city']);
    $pickup_street = mysqli_real_escape_string($connection,$_POST['pickup_street']);
    $pickup_date = mysqli_real_escape_string($connection,$_POST['pickup_date']);
    $pickup_time = mysqli_real_escape_string($connection,$_POST['pickup_time']);

    $dropoff_city = mysqli_real_escape_string($connection,$_POST['dropoff_city']);
    $dropoff_street = mysqli_real_escape_string($connection,$_POST['dropoff_street']);
    $dropoff_date = mysqli_real_escape_string($connection,$_POST['dropoff_date']);
    $dropoff_time = mysqli_real_escape_string($connection,$_POST['dropoff_time']);

    $passenger_count = mysqli_real_escape_string($connection,$_POST['passenger_count']);

    $booking_data= array(
        'pickup_city' => $pickup_city,
        'pickup_street' => $pickup_street,
        'pickup_date' => $pickup_date,
        'pickup_time' => $pickup_time,
        'dropoff_city' => $dropoff_city,
        'dropoff_street' =>$dropoff_street,
        'dropoff_date' => $dropoff_date,
        'dropoff_time' => $dropoff_time,
        'passenger_count' => $passenger_count,
    );

    $_SESSION['booking_data']=$booking_data;


    $pickup_date = date("Y-m-d",strtotime(stripslashes(str_replace(",","",$pickup_date))));
    $dropoff_date = date("Y-m-d",strtotime(stripslashes(str_replace(",","",$dropoff_date))));
    $current_date = date('Y-m-d');

//        echo $pickup_time; exit();

    // Checking whether the chosen dates are valid.
    if($pickup_date<$current_date && $pickup_date!=$current_date){
        $error = "Pickup date is earlier than current date, we cannot pick you up in the past. ";

    }elseif ($dropoff_date<$pickup_date && $dropoff_date!=$pickup_date ){
        $error ="Drop off date is earlier than pickup date";

    }elseif ($passenger_count>$selected_vehicle_row['no_of_seats']){
        $error ="Passenger count cannot be higher than total seat capacity of the vehicle";

    }else{ // Else: Dates are good

        // Check the vehicle is available for the chosen date or not.

        // Insert booking info in the database

        // decoding username
        function base64url_decode($plainText) {
            $base64url = strtr($plainText, '-_,', '+/=');
            $base64 = base64_decode($base64url);
            return $base64;
        }
        $user = base64url_decode($_SESSION['user']);

        if($connection) {

            //getting user id.
            $query1 = "SELECT id FROM user_tbl WHERE email = '{$user}'";

            $q1_result = mysqli_query($connection,$query1);

            if(mysqli_num_rows($q1_result)){
                $row = mysqli_fetch_assoc($q1_result);
                $user_id = $row['id'];
            }

            $query = "INSERT INTO booking VALUES(null,{$user_id},'{$vehicle_id}','{$pickup_city}','{$pickup_street}','{$pickup_date}','{$pickup_time}','{$dropoff_city}','{$dropoff_street}','{$dropoff_date}','{$dropoff_time}',{$passenger_count},0,'{$package_id}')";

            $query_result = mysqli_query($connection, $query);

        }
        if($query_result){
            //Booking Success Message
            $msg = "Booking Success! Check your email, confirmation will arrive within 24 working hours.";


            // Sending mail to the Admin
            $subject = 'New Booking Detected!';
            $main_message = '<h3>Dear Admin!</h3><p> New Booking Request has been recorded, Be Ready to Confirm! </p> </br> <a href="'.BASE_URL.'admin"> Click here to Go to Admin Page</a>';
            $email_receiver = 'kabelivehicleservice@gmail.com';

            // including mail sender
            require_once "includes/mail_to_admin.php";

            $mailResult = Send_Mail($email_receiver,$subject,$main_message);

//                if ($mailResult) {
//                    echo "Mail sent"; exit();
//                }else{
//
//                    echo "Message not sent </br>";
//                    echo $mail -> ErrorInfo; exit();
//
//                }

        }else{
            $error ="Something Went Wrong! Try again";
        }

    }
}
?>

<!-- Body -->
<!--<div  style="weight:100%;height:130px;background-color: #174f86;" >

</div>-->
<div class="home-sub-pages" style="height: 130px !important;">
    <div class="background_image" style="background-image:url(images/elements2.jpg); height:130px !important;"></div>
</div>


<!-- Booking Inputs -->

<div class="booking_input_container">
    <div class="home_search_title">Give us your details</div>

    <div class="home_search_content">
        <?php if(isset($error)){ echo "<p style='color:red;'>{$error}</p>";} if(isset($msg)){ echo "<p style='color:green;'>{$msg}</p>";} ?>
        <form autocomplete="off" action="" method="post" class="home_search_form" id="home_search_form">
            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                <input type="hidden" name="package_id" value="<?php if(isset($_GET['p_id'])){ echo $_GET['p_id'];} ?>">
                <input type="hidden" name="vehicle_id" value="<?php if(isset($selected_package_row['vehicle_id']))echo $selected_package_row['vehicle_id']; ?>">

                <select id="adults" name="pickup_city" class="search_input search_input_1" required="required">
                    <option value="<?php if(isset($_SESSION['booking_data']['pickup_city'])){ echo $_SESSION ['booking_data']['pickup_city'];} ?>"><?php if(isset($_SESSION['booking_data']['pickup_city'])){ echo $_SESSION['booking_data']['pickup_city'];}else{echo pickup_city; }?></option>
                    <option >Kathmandu</option>
                    <option >Pokhara</option>
                </select>
                <input type="text" name="pickup_street" value="<?php if(isset($_SESSION['booking_data']['pickup_street'])){ echo $_SESSION['booking_data']['pickup_street'];} ?>" class="search_input search_input_2" placeholder="Pickup Street" required="required">
                <input type="text" name="pickup_date" value="<?php if(isset($_SESSION['booking_data']['pickup_date'])){ echo $_SESSION['booking_data']['pickup_date'];} ?>" class="search_input search_input_2" id="checkin_date" placeholder="<?php echo pickup_date?>" required="required">
                <input type="text" name="pickup_time" value="<?php if(isset($_SESSION['booking_data']['pickup_time'])){ echo $_SESSION['booking_data']['pickup_time'];} ?>" class="search_input search_input_3 timepicker" placeholder="<?php echo pickup_time?>" required="required">

                <select id="adults" name="dropoff_city" class="search_input search_input_1"  required="required">
                    <option value="<?php if(isset($_SESSION['booking_data']['dropoff_city'])){ echo $_SESSION['booking_data']['dropoff_city'];} ?>"><?php if(isset($_SESSION['booking_data']['dropoff_city'])){ echo $_SESSION['booking_data']['dropoff_city'];}else{ echo drop_off_city; }?></option>
                    <option >Kathmandu</option>
                    <option >Pokhara</option>
                </select>
                <input type="text" name="dropoff_street" value="<?php if(isset($_SESSION['booking_data']['dropoff_street'])){ echo $_SESSION['booking_data']['dropoff_street'];} ?>" class="search_input search_input_2" placeholder="Drop off Street" required="required">
                <input type="text" name="dropoff_date" value="<?php if(isset($_SESSION['booking_data']['dropoff_date'])){ echo $_SESSION['booking_data']['dropoff_date'];} ?>" class="search_input search_input_2" id="checkout_date" placeholder="<?php echo drop_off_date?>" required="required">
                <input type="text" name="dropoff_time" value="<?php if(isset($_SESSION['booking_data']['dropoff_time'])){ echo $_SESSION['booking_data']['dropoff_time'];} ?>" class="search_input search_input_3 timepicker" placeholder="<?php echo drop_off_time?>" required="required">


                <input type="number" name="passenger_count" value="<?php if(isset($_SESSION['booking_data']['passenger_count'])){ echo $_SESSION['booking_data']['passenger_count'];} ?>" class="search_input search_input_3" placeholder="<?php echo passenger_count?>" required="required">

                <!--                    <select name="passenger_count" class="search_input search_input_2" required="required">-->
                <!--                        <option value="" disabled selected >--><?php //echo passenger_count?><!--</option>-->
                <!--                        <option >1</option>-->
                <!--                        <option >2</option>-->
                <!--                        <option >3</option>-->
                <!--                        <option >4</option>-->
                <!--                        <option value=5 >5+</option>-->
                <!--                        <option value=7 >7+</option>-->
                <!--                    </select>-->

            </div>
            <div class="book_clear" style="padding: 10px; margin: 20px">

                <div style= "float: left; height: 300px; width: 550px;">
                    <img src="<?php echo BASE_URL.$selected_package_row['picture_url']; ?>" height="300" alt="">
                </div>
                <div style= "float: left;" >
                    <h5><?php echo $selected_package_row['package_title']; ?></h5>
                    <ul>
                        <li><?php echo $selected_package_row['description']; ?></li>
                        <li><?php echo "For: $".$selected_package_row['rate']; ?></li>
                        <br>
                        <li><h6>Vehicle Info</h6></li>
                        <li><?php echo $selected_package_row['brand']." - ".$selected_package_row['name']; ?></li>
                        <li><?php echo "Total Seats: ".$selected_package_row['no_of_seats']; ?></li>
                        <li><?php echo "Air Condition: "; if($selected_package_row['ac_availability']==1)echo "Yes"; else echo "No"; ?></li>
                        <li><?php echo "Air Bag: "; if($selected_package_row['air_bag_availability']==1)echo "Yes"; else echo "No"; ?></li>
                        <li><?php echo "Wifi: "; if($selected_package_row['wifi_availability']==1)echo "Yes"; else echo "No"; ?></li>
                        <li>With Chauffer: Yes</li>
                        <!--                        <br>-->
                    </ul>
                        <button class="reserve_pay" type="submit" name="info_submit" style="margin-top: 10px;" >Continue Reservation</button>
        </form>

    </div>
</div>
<div style="clear:both;"></div>

<!--                <button class="home_search_button " type="submit" name="search_submit" style=" height:52px !important; width: 300px !important;" >Continue Reservation</button>-->

</div>
</div>

<?php

$_SESSION ['booking_data'] = array();

include('includes/footer.php');
?>

