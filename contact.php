<?php
$page=4;

include('includes/header.php'); // header.php contains function.php and db_connection.php
                                // db_connection file also contains BASE_URL

if(isset($_POST['submit'])) {

//    echo "<pre>";print_r($_POST);echo "</pre>"; exit();


    $name = Input_Validation($_POST['name']);
    $email = Input_Validation($_POST['email']);
    $subject = Input_Validation($_POST['subject']);
    $message = Input_Validation($_POST['message']);


//        echo $first_name." ".$last_name; exit();
    if (preg_match('/[`~!@#$%*^(\/)<>.,:+-;{}\|0123456789]/', $name)) {
        $er_msg = "Name contains illegal characters!";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $er_msg = "Email contains invalid characters";

    }else {

        if ($connection) {

            // prevention of sql injection with mysqli real escape function.
            $name = mysqli_real_escape_string($connection, $name);
            $email = mysqli_real_escape_string($connection, $email);
            $subject = mysqli_real_escape_string($connection, $subject);
            $message = mysqli_real_escape_string($connection, $message);

            $query = "INSERT INTO feedback_tbl VALUES(null,'{$name}','{$email}','{$subject}','{$message}')";

            $query_result = mysqli_query($connection,$query);
            if($query_result){

                $msg="Message Recorded!";
            }else{
                $er_msg="Something Went wrong. Please Try Again!";
            }
        }
    }
}
?>
<!-- Home -->

<div class="home-sub-pages">
	<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
</div>
<!-- Contact -->
    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title">Get in touch with us</div>
                        <div class="contact_text">
                            <p></p>
                        </div>
                        <div class="contact_list">
                            <ul>
                                <li>
                                    <div>address:</div>
                                    <div><?php  echo $info_row['street'].", ".$info_row['city']." ".$info_row['zip_code'].", ".$info_row['country']; ?></div>
                                </li>
                                <li>
                                    <div>phone:</div>
                                    <div>
                                        <?php echo office_landline ?> : &nbsp; +977 - <?php  echo $info_row['office_contact_no']."<br><br>"; ?>
                                        <?php echo mobile ?> :&nbsp +977 - <?php  echo $info_row['mobile_no']; ?>
                                    </div>

                                </li>
                                <li>
                                    <div>email:</div>
                                    <div>
                                        <?php  echo $info_row['email1']."<br><br>"; ?>
                                        <?php  echo $info_row['email2']; ?>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact_form_container">
                        <?php
                        if(isset($er_msg)){echo "<p style='color: red;'>{$er_msg}</p>";}
                        if(isset($msg)){echo "<p style='color: green;'>{$msg}</p>";}
                        ?>
                        <form action="" id="contact_form" method="post" class="contact_form">
                            <div style="margin-bottom: 18px"><input type="text" value="<?php if(isset($name)){echo $name;} ?>" name="name" class="contact_input contact_input_name inpt" placeholder="Your Name" required="required"><div class="input_border"></div></div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 18px">
                                    <div><input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>" class="contact_input contact_input_email inpt" placeholder="Your E-mail" required="required"><div class="input_border"></div></div>
                                </div>
                                <div class="col-lg-6" style="margin-bottom: 18px">
                                    <div><input type="text" name="subject" value="<?php if(isset($subject)){echo $subject;} ?>" class="contact_input contact_input_subject inpt" placeholder="Subject" required="required"><div class="input_border"></div></div>
                                </div>
                            </div>
                            <div><textarea class="contact_textarea contact_input inpt" name="message" <?php if(isset($message)){echo $message;} ?> placeholder="Message" required="required"></textarea><div class="input_border" style="bottom:3px"></div></div>
                            <button class="contact_button" name="submit" type="submit">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include('includes/footer.php') ?>