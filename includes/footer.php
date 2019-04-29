    <!--Login modal -->
    <?php require_once 'includes/login_model.php'; ?>

	
	<!--Register modal  -->
    <?php require_once 'includes/register_model.php'; ?>


	<!-- Footer -->
	<footer class="footer" >
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8" ></div>
		<div class="container">

			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row" data-aos="fade-up" data-aos-delay="200">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col" >
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title"><?php echo call_us ?></div>
								<div class="footer_contact_list">
									<ul>
										<li><?php echo office_landline ?> : &nbsp +977 - <?php  echo $info_row['office_contact_no']; ?></li>
										<li><?php echo mobile ?> :&nbsp +977 - <?php  echo $info_row['mobile_no']; ?></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col" >
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title"><?php echo come_drop_by ?></div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>
                                            <?php  echo $info_row['street'].", ".$info_row['city']." ".$info_row['zip_code'].", ".$info_row['country']; ?>
                                        </li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col" >
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title"><?php echo send_us_message ?></div>
								<div class="footer_contact_list">
									<ul>
										<li> <?php  echo $info_row['email1']; ?></li>
										<li> <?php  echo $info_row['email2']; ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col text-center" style="color: black !important;">
Copyright &copy; <script>document.write(new Date().getFullYear());</script> &nbsp;Kabeli Vehicle Tours Service Pvt. Ltd. | Regards to <a style="color: gray !important;" id="ma" href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
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
<!--<script src="js/aos.js"></script>-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!--Time Picker Date-->
<!--<script src="js/jquery.timepicker.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    // $(".dropdown-menu li a").click(function(){
    //     var selText = $(this).text();
    //     $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
    // });

    $(document).ready(function(){
        $('input.timepicker').timepicker({
            scrollbar: true
        });
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