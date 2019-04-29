<?php
define('BASE_URL','http://localhost/kabeli/');

if(isset($_POST['login'])) {
    include_once('functions.php');
    include_once('db_connection.php');

    //   print_r($_POST); exit();
    //   echo $_POST['firstname']."</br>";

    $email = Input_Validation($_POST['email']);
    $password = Input_Validation($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $reg_er_msg = "Email contains invalid characters";
    } else {
        if ($connection) {

            // prevention of sql injection with mysqli real escape function.
            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);

            // Hashing Password
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystrings22";
            $hashFormat_and_salt = $hashFormat . $salt;

            $password = crypt($password, $hashFormat_and_salt);

            // checking email and password
            $query2 = "SELECT email FROM user_tbl WHERE email = '{$email}' AND password = '{$password}'AND verification_status =1";

            $result2 = mysqli_query($connection,$query2);

            if(mysqli_num_rows($result2)){
                $lg = 1;
//                echo "login Success";
                session_start();
                $_SESSION['user_token']= true;
                $_SESSION['id']= "";
                $_SESSION['first_name']= "";
                $_SESSION['last_name']= "";
                $_SESSION['picture']= BASE_URL."images/user.png";
                $_SESSION['email']= $email;
                header("Location: ../vehicles.php?lg={$lg}");
            }else{
                $lg = 0;
                $lg_er_msg ="Either Password is Wrong Or Email you entered is invalid or not verified!";
                header("Location: ../vehicles.php?lg_er_msg={$lg_er_msg}& lg={$lg}");

            }

        }
    }
}