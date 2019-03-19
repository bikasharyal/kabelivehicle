<!--Login modal start -->
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
						  <form action="/action_page.php">
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

								<input type="text" class = "input_mybtn" name="username" placeholder="Username" required>
								<input type="password" class = "input_mybtn"name="password" placeholder="Password" required>
								<input type="submit" class = "input_mybtn" value="Login">
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
	   
	<!--Login modal end -->
	
	<!--Register modal start -->
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
						  <form action="/action_page.php">
							<div class="row">


							  <div class="col-mybuttons">
                                  <input type="text" class = "input_mybtn" name="firstname" placeholder="First Name" required>
                                  <input type="text" class = "input_mybtn"name="lastname" placeholder="Last Name" required>

                                  <div class = "input_mybtn">
                                      <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                      <div class="form-check-inline">
                                          <input type="radio" class="form-check-input" name="optradio"><label class="form-check-label">Male </label>
                                      </div>
                                      <div class="form-check-inline">
                                        <input type="radio" class="form-check-input" name="optradio">&nbsp;&nbsp;&nbsp;&nbsp;<label class="form-check-label"> Female </label>
                                      </div>
                                  </div>

							  </div>
                            <div class="col-mybuttons">
                                <input type="email" class = "input_mybtn"name="email" placeholder="Email" required>
                                <input type="password" class = "input_mybtn"name="password" placeholder="Password" required>
                                <input type="password" class = "input_mybtn"name="password" placeholder="Confirm Password" required>

                            </div>

							  <div class="col-mybuttons">
                                <input type="submit" class = "input_mybtn" value="Register"><br>
                                  <div class="row">
                                      <div class="col"><hr></div>
                                      <div class="col-auto">OR</div>
                                      <div class="col"><hr></div>
                                  </div>
								<div class="mylogin-hide-md-lg">
								  <!--<p>Or sign in manually :</p>-->

								</div>
                                  <a href="#" class="fb btn" id="input_mybtn">
                                      <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
                                  </a>

                                  <a href="#" class="google btn" id="input_mybtn">
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
	   
	    <!--Register Modal end -->

	<!-- Footer -->

	<footer class="footer" >
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8" ></div>
		<div class="container">
            <!--	<div class="row">
                    <div class="col">
                        <div class="newsletter">
                            <div class="newsletter_title_container text-center">
                                <div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
                                <div class="newsletter_subtitle">Join our database NOW!</div>
                            </div>
                            <div class="newsletter_form_container">
                                <form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
                                    <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                        <div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
                                        <div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
                                    </div>
                                    <div><button class="newsletter_button">subscribe</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> &nbsp;Kabeli Vehicle Tours Service Pvt. Ltd. &nbsp;-&nbsp; All rights reserved | Regards to <a id="ma" href="https://colorlib.com" target="_blank">Colorlib</a>

	</footer>
<!--    --><?php
//        print_r ($_SESSION);
//    ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

<script>
    $(".dropdown-menu li a").click(function(){
        var selText = $(this).text();
        $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
    });
    // $(function(){
    //     $('.selectpicker').selectpicker();
    // });

</script>

<!-- below script needed for datepicker and bootstrap  -->	  
      <script src="js/jquery-migrate-3.0.1.min.js"></script>      
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/datepicker_javascript_function.js"></script>


</body>
</html>