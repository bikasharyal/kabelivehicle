<?php
//session_start();
$page=1;
//print_r ($_SESSION);
//require_once 'includes/nav_array.php';
include_once('includes/header.php');
?>
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider1.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us take you away</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider11.png)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Let us take you away</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider2.jpeg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Let us take you away</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!--<div class="home_page_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
					<li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
					<li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
				</ul>
			</div> -->
		</div>
	</div>

	<!-- Search -->
								
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col"> 
					<div class="home_search_container">
						<div class="home_search_title">Search for your Ride</div>
						  <form action="#" class="home_search_form" id="home_search_form">
							<div class="home_search_content">
							
								<!--<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								
									<input type="text"placeholder="Pickup Date" id="checkout_date" class="form-control">
									<input type="text"placeholder="Drop Off Date" id="checkin_date" class="form-control">
									
									<select name="" placeholder="Passenger" class="form-control">
										<option value="">Passenger Count</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4+</option>
									</select>
									<select name=""  placeholder="Vehicle Type" class="form-control">
										<option value="">Vehicle Type</option>
										<option value="">SUV</option>
										<option value="">Pickup</option>
										<option value="">Sedan</option>
										<option value="">Hatch-back</option>
										
									</select>
									<div class="col-md-6 col-lg-3 align-self-end">
									<button class="btn btn-danger btn-block text-white">Find your Ride</button>
									</div>
																	
								</div>-->
								<div class="row">
								  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
									<label for="checkin_date" class="font-weight-bold text-black"><strong>Pickup Date</strong></label>
									<div class="field-icon-wrap">
									  <div class="icon"><span class="icon-calendar"></span></div>
									  <input type="text" id="checkout_date" class="form-control" required="required">
									</div>
								  </div>
								  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
									<label for="checkout_date" class="font-weight-bold text-black"><strong>Drop Off Date</strong></label>
									<div class="field-icon-wrap">
									  <div class="icon"><span class="icon-calendar"></span></div>
									  <input type="text"id="checkin_date" class="form-control" required="required">
									</div>
								  </div>
									  <div class="col-md-6 mb-3 mb-md-0 col-lg-3">	
										<label class="font-weight-bold text-black"><strong>Passenger Count</strong></label>
										<div class="field-icon-wrap">
										  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
										  <select name="" class="form-control" required="required">
												<option value=""></option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>
												<option value="">4+</option>
											</select>
										</div>
									  </div>
									  <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
										<label for="children" class="font-weight-bold text-black"><strong>Vehicle Type</strong></label>
										<div class="field-icon-wrap">
										  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
										  <select name=""  class="form-control" required="required">
												<option value=""></option>
												<option value="">SUV</option>
												<option value="">Pickup</option>
												<option value="">Sedan</option>
												<option value="">Hatch-back</option>
												
											</select>
										</div>
									  </div>									
								</div>
                                <button class="btn btn-info btn-lg btn-block"><strong>Find your Ride</strong></button>
							</div>	

						</form>
					</div>
				</div>
			 </div>
		</div>
	</div>

	<!-- Intro -->

	<!-- <div class="intro">
		<div class="intro_background" style="background-image:url(images/intro.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container">
						<div class="row">


							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/beach.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Top Destinations</div>
										<div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
									</div>
								</div>
							</div>


							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">The Best Prices</div>
										<div class="intro_subtitle"><p>Sollicitudin mauris lobortis in.</p></div>
									</div>
								</div>
							</div>


							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Amazing Services</div>
										<div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>		
			</div>
		</div>
	</div> -->

	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col text-center">
					<div class="section_subtitle">find your best suit</div>
					<div class="section_title"><h2>Popular Vehicle Packages</h2></div>
				</div>
			</div>
			<div class="row destinations_row" >
				<div class="col">
					<div class="destinations_container item_grid" >

						<!-- Destination -->
						<div class="destination item" data-aos="fade-up" data-aos-delay="200">
							<div class="destination_image">
								<img src="images/destination_1.jpg" alt="">
								<div class="spec_offer text-center"><a href="#">Special Offer</a></div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">Bali</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item" data-aos="fade-up" data-aos-delay="300" >
							<div class="destination_image">
								<img src="images/destination_2.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">Indonesia</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item" data-aos="fade-up" data-aos-delay="400" >
							<div class="destination_image">
								<img src="images/destination_3.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">San Francisco</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item" data-aos="fade-up" data-aos-delay="200">
							<div class="destination_image">
								<img src="images/destination_4.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">Paris</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item"  data-aos="fade-up" data-aos-delay="300">
							<div class="destination_image">
								<img src="images/destination_5.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">Phi Phi Island</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item" data-aos="fade-up" data-aos-delay="400">
							<div class="destination_image">
								<img src="images/destination_6.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.php">Mykonos</a></div>
								<div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
								<div class="destination_price">From $679</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Testimonials

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Testimonials</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					 Testimonials Slider
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							 Slide
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							 Slide
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							 Slide
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="test_nav">
			<ul class="d-flex flex-column align-items-end justify-content-end">
				<li><a href="#">City Breaks Clients<span>01</span></a></li>
				<li><a href="#">Cruises Clients<span>02</span></a></li>
				<li><a href="#">All Inclusive Clients<span>03</span></a></li>
			</ul>
		</div>
	</div> -->

	<!-- News -->

<?php 
include('includes/footer.php');
?>	
	