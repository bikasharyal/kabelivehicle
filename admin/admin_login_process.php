<?php
include_once ('../includes/db_connection.php');

if(isset($_POST['admin_submit'])){

        $username =  $_POST['username'];
        $password = $_POST['pass'];

      $username = mysqli_real_escape_string($connection,$username);
      $password = mysqli_real_escape_string($connection,$password);

     //$password = "kabelipassword###";

        $hashFormat = "$2y$10$";

        $salt = "iusesomecrazystrings22";

        $hashFormat_and_salt = $hashFormat . $salt;

        $hash_password = crypt ($password,$hashFormat_and_salt);

//        echo $username."</br>".$hash_password."</br>";
//        exit();

        $query = "SELECT email, password FROM user_tbl where email = '{$username}' AND password = '{$hash_password}' AND user_type !=0";
        $result = mysqli_query($connection, $query);

//        print_r(mysqli_fetch_array($result)); exit();

        if (mysqli_num_rows($result)){

            session_start();
            $_SESSION['admin_token']=true;

            header("Location: index.php?user='.$username.'");

        }else{

            header("Location: admin_login.php");

        }

}