<!-- Modal -->
<div class="container">
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>  -->

    <div class="modal fade" id="LoginModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--<div class="modal-header">

                  <h6 class="text-center"><strong>Sign in</strong></h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>-->


                <div class="modal-body">
                    <!-- <div class="login-form"> -->
                    <!--<div class="text-center social-btn">-->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="text-center"><strong>Sign in</strong></h6>


                    <div class="login-container">
                        <?php
                        if(isset($lg_er_msg)){echo "<p style='text-align: center; color: red;'>{$lg_er_msg}</p>";}
                        ?>
                        <form action="./includes/login_process.php" method="post">
                            <div class="row">

                                <div class="vl">
                                    <span class="inner">or</span>
                                </div>


                                <div class="col-mybuttons">

                                    <a href="includes/fb_link.php" class="fb btn" id="input_mybtn">
                                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                    </a>

                                    <a href="includes/g_link.php" class="google btn" id="input_mybtn">
                                        <i class="fa fa-google fa-fw"></i> Login with Google+
                                    </a>
                                </div>

                                <div class="col-mybuttons">
                                    <div class="mylogin-hide-md-lg">
                                        <!--<p>Or sign in manually :</p>-->
                                        <div class="row">
                                            <div class="col"><hr></div>
                                            <div class="col-auto">OR</div>
                                            <div class="col"><hr></div>
                                        </div>
                                    </div>

                                    <input type="text" class = "input_mybtn" name="email" placeholder="Username" required>
                                    <input type="password" class = "input_mybtn"name="password" placeholder="Password" required>
                                    <input type="submit" name="login" class = "input_mybtn" value="Login">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="hint-text small">
                        </br>Don't have an account? &nbsp;<a  href="#" class="text-primary" data-dismiss="modal" data-toggle="modal" data-target="#RegisterModal">Register Now!</a>
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
