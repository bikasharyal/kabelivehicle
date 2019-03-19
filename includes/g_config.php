<?php
session_start();
require_once "../APIs/GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();

$gClient->setClientId("565188134263-k8ltl8gekin5g8n895fqqcdim8gn8bgj.apps.googleusercontent.com");
$gClient->setClientSecret("WHCJhC4dMGWtWSylKhkNkt9K");

$gClient->setApplicationName("Kabeli Login");
$gClient->setRedirectUri("http://localhost/kabeli/includes/g_callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
