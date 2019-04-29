<?php
    if(isset($_POST['register'])){
        include_once ('functions.php');
        include_once ('db_connection.php'); // db_connection file also contains BASE_URL

        //   print_r($_POST); exit();
        //   echo $_POST['firstname']."</br>";


        $first_name= Input_Validation($_POST['firstname']);
        $last_name= Input_Validation($_POST['lastname']);
        $gender = Input_Validation($_POST['gender']);
        $email = Input_Validation($_POST['email']);
        $password = Input_Validation($_POST['password']);
        $c_password = Input_Validation($_POST['c_password']);

//        echo $first_name." ".$last_name; exit();
        if(preg_match('/[`~!@#$%*^ (\/)<>.,:+-;{}\|0123456789]/',$first_name)){
            $reg_er_msg = "First name contains illegal characters!";
            $reg =0;
        }elseif (preg_match('/[`~!@#$%*^ (\/)<>.,:+-;{}\|0123456789]/',$last_name)){
            $reg_er_msg = "Last name contains illegal characters!";
            $reg =0;
        }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $reg_er_msg ="Email contains invalid characters";
            $reg =0;
        } elseif ($c_password!=$password){
            $reg_er_msg ="Password doesn't Match!";
            $reg =0;
        }else{

            if($connection){
                // prevention of sql injection with mysqli real escape function.
                $first_name= mysqli_real_escape_string($connection,$first_name);
                $last_name= mysqli_real_escape_string($connection,$last_name);
                $gender = mysqli_real_escape_string($connection,$gender);
                $email = mysqli_real_escape_string($connection,$email);
                $password = mysqli_real_escape_string($connection,$password);

                $query = "SELECT email FROM user_tbl WHERE email = '{$email}'";

                $result = mysqli_query($connection,$query);
                if(mysqli_num_rows($result)){
                    $reg_er_msg ="Email already registered!";
                    $reg =0;
                }else{

                    // Hashing Password
                    $hashFormat = "$2y$10$";
                    $salt = "iusesomecrazystrings22";
                    $hashFormat_and_salt = $hashFormat . $salt;

                    $password = crypt ($password,$hashFormat_and_salt);


                    // creation of verification code
                    $verification_code = md5(uniqid(rand(), true));
                    $verification_code = substr($verification_code,10,15);


                    $reg_query = "INSERT INTO user_tbl (first_name,last_name,gender,email,password,verification_code)";
                    $reg_query.="VALUES ('{$first_name}','{$last_name}','{$gender}','{$email}','{$password}','{$verification_code}')";

                    $reg_result = mysqli_query($connection,$reg_query)or die("Error: ". mysqli_error($connection));
//                var_dump($reg_result);
//                Exit();

                    if($reg_result){
                        $reg_suc_msg = "Registration Successful! Check your email for the email verification.";
                        $reg =1;
                        // Mail details
                        $subject = 'Kabeli Vehicle - Email Verification for Registration';
                        $main_message = '<h3>Hello! '.$first_name.' '.$last_name.'</h3> </br> <a href="'.BASE_URL.'includes/reg_confirm_callback.php?email='.$email.'&v_code='.$verification_code.'"> Click here to Complete Registration</a>';
                        $email_receiver = $email;

                        // sending mail to the customer email for verification
                        require_once "mail_to_new_users.php";

                        $mailResult = Send_Mail($email_receiver,$subject,$main_message);

                        if ($mailResult) {
                            $is_mail_sent = 1;
                        }else{
                            $is_mail_sent = 0;
                            // echo "message not sent</br>";
                            // echo $mail -> ErrorInfo; exit();

                        }
                    }


                }


            }
        }

        //redirect to register model with error or success message

        header("Location: ../vehicles.php?reg_er_msg={$reg_er_msg}&reg_suc_msg={$reg_suc_msg}&reg={$reg}&is_mail_sent={$is_mail_sent}");

    }

