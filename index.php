<?php
//session_start();
$page=1;
//print_r ($_SESSION);
//require_once 'includes/nav_array.php';
include_once('includes/header.php');
?>

	<!-- Home Picture Slider-->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/ilove.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2><?php echo home_pic_floater ?></h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/hm3.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2><?php echo home_pic_floater ?></h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/hm2.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2><?php echo home_pic_floater ?></h2></div>
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

	<!-- Search vehicles -->
<?php include_once('includes/home_search.php');  ?>


	<!-- Package Destinations -->
<?php include_once('includes/home_package_destinations.php');  ?>


	<!-- Footer -->

<?php include('includes/footer.php'); ?>
	