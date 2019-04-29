<?php
include_once('functions.php');
include_once('db_connection.php');


    $email = Input_Validation($_GET['email']);
    $verification_code = Input_Validation($_GET['v_code']);

    if ($connection) {

        // prevention of sql injection with mysqli real escape function.
        $email = mysqli_real_escape_string($connection, $email);
        $verification_code = mysqli_real_escape_string($connection, $verification_code);


        // checking email and verification code
        $query2 = "SELECT email FROM user_tbl WHERE email = '{$email}'AND verification_code ='{$verification_code}'";

        $result2 = mysqli_query($connection,$query2);

        if(mysqli_num_rows($result2)){
            $query2 = "UPDATE user_tbl SET verification_status =1 WHERE email = '{$email}'";
            $result2 = mysqli_query($connection,$query2);
            header("Location: ../index.php?");

        }else{
            echo "verification code doesn't matched";
//            header("Location: ../index.php");
        }

    }
