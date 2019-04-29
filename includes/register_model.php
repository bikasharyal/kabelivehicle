<!-- Modal -->
<div class="container">
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>  -->

    <div class="modal fade" id="RegisterModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <!-- <div class="login-form"> -->
                    <!--<div class="text-center social-btn">-->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="text-center"><strong>Register</strong></h6>

                    <div class="login-container">
                        <?php if(isset($reg_er_msg)){echo "<p style='text-align: center; color: red;'>{$reg_er_msg}</p>";}
                        if(isset($reg_suc_msg)){echo "<p style='text-align: center; color: darkgreen;'>{$reg_suc_msg}</p>";} ?>
                        <form action="./includes/register_process.php" method="post" >
                            <div class="row">


                                <div class="col-mybuttons">
                                    <input type="text" class = "input_mybtn" name="firstname" placeholder="First Name" required>
                                    <input type="text" class = "input_mybtn" name="lastname" placeholder="Last Name" required>

                                    <div class = "input_mybtn">
                                        <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="male" name="gender"><label class="form-check-label">Male </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="female" name="gender">&nbsp;&nbsp;&nbsp;&nbsp;<label class="form-check-label"> Female </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-mybuttons">
                                    <input type="email" class = "input_mybtn" name="email" placeholder="Email" required>
                                    <input type="password" class = "input_mybtn" name="password" placeholder="Password" required>
                                    <input type="password" class = "input_mybtn" name="c_password" placeholder="Confirm Password" required>

                                </div>

                                <div class="col-mybuttons">
                                    <input type="submit" name="register" class = "input_mybtn" value="Register"><br>
                                    <div class="row">
                                        <div class="col"><hr></div>
                                        <div class="col-auto">OR</div>
                                        <div class="col"><hr></div>
                                    </div>
                                    <div class="mylogin-hide-md-lg">
                                        <!--<p>Or sign in manually :</p>-->

                                    </div>

                                    <a href="includes/fb_link.php" class="fb btn" id="input_mybtn">
                                        <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
                                    </a>

                                    <a href="includes/g_link.php" class="google btn" id="input_mybtn">
                                        <i class="fa fa-google fa-fw"></i> Sign Up with Google+
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="hint-text-middle small">
                        </br>Want to Login? &nbsp;<a  href="#" class="text-primary" data-dismiss ="modal" data-toggle="modal" data-target="#LoginModal">Login Now</a>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

</div>
