<?php
require_once "fb_config.php";

$redirectURL = "http://localhost/kabeli/includes/fb_callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

//echo $loginURL;
//exit();

header("Location:".$loginURL);