<?php
//require_once 'includes/nav_array.php';
require_once 'includes/db_connection.php';
require_once 'includes/lang_switcher.php';
require_once 'includes/functions.php';
$info_row = Get_Company_Info($connection);
?>

<!DOCTYPE html>
<html >
<head>
	<title>Kabeli Renters</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Kabeli Renters">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href= "plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">



    <link rel="stylesheet" href="styles/model_style.css">
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/destinations.css">


    <!--    favicon-->
    <link rel="icon" href="./images/favicon.png" sizes="16x16"	type="image/png"/>



    <!--  Date and Time picker links -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="styles/bootstrap-datepicker.css">


    <!--    aos animation-->
    <link rel="stylesheet" href="styles/aos.css">
    <!--    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->

<!--    --><?php //if(isset($page) && !empty($page) && $page==3): ?>
<!---->
<!--        <link rel="stylesheet" href="styles/booking_input_style.css">-->
<!---->
<!--    --><?php //endif; ?>



</head>
<body>

<div class="super_container">

    <!-- Navigation Header -->
    <?php require_once 'includes/navigation.php'; ?>

	<!--Small Window Menu -->
    <?php require_once 'includes/small_window_menu.php'; ?>
