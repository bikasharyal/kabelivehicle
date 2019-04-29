<?php
    session_start();

	if($_SESSION['fb_access_token']){
        unset($_SESSION['fb_access_token']);
        // session_destroy();
    }else if ($_SESSION['g_access_token']){
        require_once "g_config.php";
        unset($_SESSION['g_access_token']);
        $gClient->revokeToken();
    }else if ($_SESSION['user_token']){
	    unset($_SESSION['user_token']);
    }

	//session_destroy();
	
	header('Location: ../index.php');
	exit();
?>