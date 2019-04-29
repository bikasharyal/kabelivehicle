<?php
$navItems = array(
    array(
        'tlink' => "index.php",
        'title' => "Home"
    ),
    array(
        'tlink' => "about.php",
        'title' => "About us"
    ),
    array(
        'tlink' => "vehicles.php",
        'title' => "Vehicles"
    ),

    array(
        'tlink' => "contact.php",
        'title' => "Contact us"
    ),
);

$lang= array(
    "title" => "Kabeli Renters",
    "login" => "Login",
    "logout" => "Log out",
    "register" => "Register",
    "home_pic_floater" => "Let us take you away",
    "vehicle_search" => "Search for your Ride",
    "search_submit" => "Find your Ride",

    "pickup_city" => "Pickup City",
    "pickup_date" => "Pickup Date",
    "pickup_time" => "Pickup Time",
    "drop_off_city" => "Drop off City",
    "drop_off_date" => "Drop off Date",
    "drop_off_time" => "Drop off Time",
    "passenger_count" => "Passenger Count",
    "vehicle_type" => "Vehicle type",

    "package_subtitle" => "find your best suit",
    "package_title" => "Popular Vehicle Packages",
    "special_offer" => "Special Offer",


    "call_us" => "give us a call",
    "office_landline" => "Office Landline",
    "mobile" => "Mobile",
    "come_drop_by" => "come & drop by",
    "send_us_message" => "send us a message",

    "vehicle_subtitle" => "make your trip perfect with",
    "vehicle_title" => "Our Amazing Rides",
);

foreach($lang as $key => $value){
    define($key,$value);
}


