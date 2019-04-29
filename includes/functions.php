<?php
//require_once 'includes/db_connection.php';

function Input_Validation($input){
    $val_input = htmlspecialchars(stripcslashes(strip_tags($input)));
    return $val_input;

    // htmlspecialchar : string method helps not to execute html tags.
    // stripcslashes   : string method helps to delete \ from the string
    // strip_tags      : string method helps to delete html tags <>
}

function Get_Company_Info($connection){
    if($connection) {
        $query = "Select street,city,country,zip_code,office_contact_no,mobile_no,email1,email2 from company_details ";
        $info_result = mysqli_query($connection, $query) or die("Error!");
        return mysqli_fetch_assoc($info_result);
    }
}

function Get_Vehicle_Info($connection){
    if($connection){
        $lang=$_SESSION['lang'];
        if(isset($_GET['count'])&& !empty($_GET['count']) && !empty($_GET['vt'])){

            $seat_count = $_GET['count'];
            $vt = $_GET['vt'];

            $query1 = "Select v.vehicle_id,v.brand, v.name,v.no_of_seats,v.picture_url,v.price_per_day,v.ac_availability,v.air_bag_availability,v.wifi_availability, vd.description, vd.type from vehicle AS v JOIN vehicle_description AS vd ON v.vehicle_id=vd.vehicle_id where vd.lang='{$lang}' AND v.no_of_seats >= {$seat_count} AND vd.type='{$vt}'";

             return mysqli_query($connection, $query1);
            //$vehicle_rows = mysqli_fetch_assoc($vehicle_results);

        }elseif(isset($_GET['count'])&& !empty($_GET['count'])&& empty($_GET['vt'])) {
            $seat_count = $_GET['count'];
            $vt = $_GET['vt'];

            $query1 = "Select v.vehicle_id,v.brand, v.name,v.no_of_seats,v.picture_url,v.price_per_day,v.ac_availability,v.air_bag_availability,v.wifi_availability, vd.description, vd.type from vehicle AS v JOIN vehicle_description AS vd ON v.vehicle_id=vd.vehicle_id where vd.lang='{$lang}' AND v.no_of_seats >= {$seat_count} ";

            return mysqli_query($connection, $query1);
            //$vehicle_rows = mysqli_fetch_assoc($vehicle_results);

        }elseif(isset($_GET['vt'])&& !empty($_GET['vt'])&& empty($_GET['count'])) {
            $seat_count = $_GET['count'];
            $vt = $_GET['vt'];

            $query1 = "Select v.vehicle_id,v.brand, v.name,v.no_of_seats,v.picture_url,v.price_per_day,v.ac_availability,v.air_bag_availability,v.wifi_availability, vd.description, vd.type from vehicle AS v JOIN vehicle_description AS vd ON v.vehicle_id=vd.vehicle_id where vd.lang='{$lang}' AND vd.type='{$vt}' ";

            return mysqli_query($connection, $query1);
            //$vehicle_rows = mysqli_fetch_assoc($vehicle_results);

        }else {
            $query1 = "Select v.vehicle_id,v.brand, v.name,v.no_of_seats,v.picture_url,v.price_per_day,v.ac_availability,v.air_bag_availability,v.wifi_availability, vd.description, vd.type from vehicle AS v JOIN vehicle_description AS vd ON v.vehicle_id = vd.vehicle_id where vd.lang='{$lang}'";
            //     $query1 = "Select * from  vehicle_description where lang='".$lang."'";

            return mysqli_query($connection, $query1);
        }
    }
}

function Get_Vehicle_Where_con($connection, $vehicle_id){
    if($connection){
        $lang=$_SESSION['lang'];

        $query1 = "Select v.vehicle_id,v.brand, v.name,v.no_of_seats,v.picture_url,v.price_per_day,v.ac_availability,v.air_bag_availability,v.wifi_availability, vd.description, vd.type from vehicle AS v JOIN vehicle_description AS vd ON v.vehicle_id=vd.vehicle_id where vd.lang='{$lang}' AND v.vehicle_id = '{$vehicle_id}'";

        return mysqli_query($connection, $query1);
        //$vehicle_rows = mysqli_fetch_assoc($vehicle_results);
    }
}


function Record_Booking($connection,$user_id,$vehicle_id,$pickup_city,$pickup_street,$pickup_date,$pickup_time,$dropoff_city,$dropoff_street,$dropoff_date,$dropoff_time,$passenger_count){

    if($connection) {
        $query = "INSERT INTO booking VALUES(null,{$user_id},'{$vehicle_id}','{$pickup_city}','{$pickup_street}','{$pickup_date}','{$pickup_time}','{$dropoff_city}','{$dropoff_street}','{$dropoff_date}','{$dropoff_time}',{$passenger_count},0)";

        $query_result = mysqli_query($connection, $query);

        if (!$query_result) {
    //        die("Query Error:".mysqli_error($connection));
            return 0;
        } else {
            return 1;
        }
    }
}

?>
