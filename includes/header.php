<?php
//require_once 'includes/nav_array.php';
require_once 'includes/lang_switcher.php';
?>

<!DOCTYPE html>
<html >
<head>
	<title><?php echo $lang['title'] ?></title>
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

<!--    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">

    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/news_responsive.css"> -->

	<!-- below script needed for datepicker -->
		  <link rel="stylesheet" href="styles/bootstrap-datepicker.css">
    <!-- below link needed for favicon -->
    <link rel="icon" href="./images/favicon.png" sizes="16x16"	type="image/png"/>

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.php"><?php echo $lang['title'] ?></a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<?php $pageCount=0; foreach ($navItems as $item): ++$pageCount; ?>
										<li <?php if ($page == $pageCount): echo "class=\"active\""; $current_pg_link = $item['tlink']; endif?>><a href="<?php echo $item['tlink'];?>"><?php echo $item['title'];?></a></li>
									<?php endforeach  ?>
								</ul>
							</nav>
                            <!--     <div class="header_phone ml-auto">
                                <div class="btn-group btn-group-sm" role="group" >
                                    <button  class="btn  btn-outline-light pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
                                </div>
                            </div>-->

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>

                        <?php if (!isset($_SESSION['g_access_token'])&&!isset($_SESSION['fb_access_token'])):?>
                          <!--  <div class="header_phone ml-auto">
                                <div class="btn-group btn-group-sm" role="group" >
                                    <button  class="btn  btn-outline-light pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
                                </div>
                            </div> -->
                            <div class="btn-group" >
                                <a class="btn btn-sm dropdown-toggle" id="ma" data-toggle="dropdown" href="#"><?php echo $lang['login'] ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#LoginModal"><?php echo $lang['login'] ?></a></li>
                                    <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#RegisterModal"><?php echo $lang['register'] ?></a></li>

                                </ul>
                            </div>
                        <?php else:?>

<!--                            <div class="header_phone ml-auto">-->
<!--                                <div class="btn-group btn-group-xs" role="group" >-->
                                    <?php if(isset($_SESSION['picture'])):?>
                                    <a href="includes/afterlogin.php"><img src="<?php echo $_SESSION['picture']?>" alt="Avatar" class="avatar" style="vertical-align: middle;width: 25px;height: 25px;border-radius: 50%;" ></a>
                                    <?php endif;?>
                                    &nbsp;&nbsp;<a class="ma" href="includes/logout.php"><?php echo $lang['logout'] ?></a>&nbsp;&nbsp;

<!--                                </div>-->
<!--                            </div>-->
                        <?php endif ?>
<!--                        <select class="selectpicker"  id="trasparent-select" data-width="fit" >-->
<!--                             <option><a href="news.php"><img src="images/us.svg" alt="US-Flag"> EN </a></option>-->
<!--                            <option ><a href="#"><img src="images/es.svg" alt="Espanish-Flag">ES</a></option>-->
<!--                        </select>-->
                        <div class="btn-group">
                            <a class="btn btn-sm dropdown-toggle" id="ma" data-toggle="dropdown" href="#">EN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item" ><a href="<?php echo $current_pg_link.'?lang=en'?>"><img src="images/us.svg" alt="US-Flag" style="width:40px; height: 25px;">&nbsp;&nbsp;EN</a></li>
                                <li class="dropdown-item" ><a href="<?php echo $current_pg_link.'?lang=es'?>"><img src="images/es.svg" alt="Espanish-Flag" style="width:40px; height: 25px;">&nbsp;&nbsp;ES</a></li>

                            </ul>
                        </div>

					</div>

				</div>


			</div>

		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!--Small Window Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.php">Kabeli Renters</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="#">Book vehicle</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><div class="btn-group btn-group-sm" role="group" >
								<button  class="btn  btn-outline-info pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
								</div> </li>
			</ul>
		</div>
		<div class="menu_social">
			
			<ul class="d-flex flex-row align-items-start justify-content-start">			
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>