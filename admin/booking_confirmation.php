<?php
include_once ('../includes/db_connection.php'); // db_connection file also contains BASE_URL

$booking_id = $_GET['id'];
$user_id = $_GET['u_id'];

if($connection){

    $query="UPDATE booking SET booking_status=1 WHERE booking_id= {$booking_id}";
    $update_bs = mysqli_query($connection,$query);

    if($update_bs){

        if($user_id!=null || $user_id!=""){

            // getting user details from database
            $u_query="SELECT first_name, last_name, email FROM user_tbl WHERE id = {$user_id}";
            $result = mysqli_query($connection,$u_query);
            $row = mysqli_fetch_assoc($result);
            $name = $row['first_name']." ".$row['last_name'];

            // Creating Mail details and subjects.
            $subject = 'Kabeli Vehicle - Booking Confirmation';
            $email_receiver = $row['email'];
            $main_message = '<h3>Hello! '.$name.'</h3> </br>';
            $main_message .= 'Thank you for reserving vehicle with us. </br> </br> </br>';
            $main_message .='<p>Best Regards,</p> <p>Kabeli Vehicles Tours Service Pvt.Ltd.</p>';
            $main_message .='<p>Head office : Anamnagar, Kathmandu Nepal</p> <p> Contact No. +977 - 9851092587</p>';
            $main_message .='Office: 01-4770175/ 01-4770389</p> <p> Viber No. +977 - 9841988262</p> ';

            // Sending Mail to the Customer addressing booking Confirmation.
            require_once "includes/mail_to_customer.php";

            $mailResult = Send_Mail($email_receiver,$subject,$main_message);

//            if ($mailResult) {
//                $is_mail_sent = 1;
//                echo $is_mail_sent; exit();
//            }else{
//                $is_mail_sent = 0;
//                echo $is_mail_sent; exit();
//            }
            header("Location: booking_manage.php");

        }

    }else{
        header("Location: booking_manage.php");
    }
}
