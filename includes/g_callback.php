<?php
	require_once "g_config.php";
require_once 'db_connection.php';
	if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['g_access_token'] = $token;

	} else {
		echo "You are at google call back page";
		exit();
	}

//    if (isset($_SESSION['fb_access_token'])){
//        session_destroy();
//    }

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['first_name'] = $userData['givenName'];
	$_SESSION['last_name'] = $userData['familyName'];
    // username encoding
    function base64url_encode($plainText) {
        $base64 = base64_encode($plainText);
        $base64url = strtr($base64, '+/=', '-_,');
        return $base64url;
    }
    $_SESSION['user'] = base64url_encode($userData['email']);



    $first_name = $userData['givenName'];
    $last_name = $userData['familyName'];
    $email = $userData['email'];
    $picture_url = $userData['picture'];

    if($connection){
        $query1 = "SELECT email FROM user_tbl WHERE email = '{$email}'";

        $result1 = mysqli_query($connection,$query1);

        if(mysqli_num_rows($result1)<=0){

            $query = "INSERT INTO user_tbl(first_name,last_name,email,picture_url,verification_status)";
            $query.= " VALUES('{$first_name}','{$last_name}','{$email}','{$picture_url}',1)";
            $result = mysqli_query($connection,$query) or die ("Query Failed" );
        }
    }


header('Location: ../index.php');
	exit();
?>