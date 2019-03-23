<?php
$page=3;
//require_once 'includes/nav_array.php';
include('includes/header.php');
?>

<!-- Body -->
<!--<div  style="weight:100%;height:130px;background-color: #174f86;" >

</div>-->
<div class="home-sub-pages">
    <div class="background_image" style="background-image:url(images/elements.jpg)"></div>
</div>
    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">make your trip perfect with</div>
                    <div class="section_title"><h2>Our Amazing Rides</h2></div>

                </div>
            </div>
            <div class="row destination_sorting_row">
                <div class="col">
                    <div class="destination_sorting d-flex flex-row align-items-start justify-content-start">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort By</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">Categories</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="num_sorting_btn"><span>Category</span></li>
                                        <li class="num_sorting_btn"><span>Category</span></li>
                                        <li class="num_sorting_btn"><span>Category</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sort_box ml-auto"><i class="fa fa-th" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid">

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_1.jpg" alt="">
                                <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Bali</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_2.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Indonesia</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $579</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_3.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">San Francisco</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $399</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_4.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Paris</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $639</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_5.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Phi Phi Island</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $929</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_6.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Mykonos</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $719</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_7.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Paris</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $515</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_8.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Phi Phi Island</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $879</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Destination -->
                        <div class="destination item">
                            <div class="destination_image">
                                <img src="images/destination_9.jpg" alt="">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="#">Mykonos</a></div>
                                <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                <div class="destination_price">From $679</div>
                                <div class="destination_list">
                                    <ul>
                                        <li>5 Stars Hotel</li>
                                        <li>All Inclusive</li>
                                        <li>Flight tickets included</li>
                                        <li>Guided visits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row load_more_row" data-aos="fade-right" data-aos-delay="100">
                <div class="col">
                    <div class="button load_more_button"><a href="#">Load More</a></div>
                </div>
            </div>
        </div>
    </div>

<?php

include('includes/footer.php');
?>