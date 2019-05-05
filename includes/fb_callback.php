<?php
	require_once "fb_config.php";
    require_once 'db_connection.php';
	try {
		$accessToken = $helper->getAccessToken();
	} catch (\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Response Exception: " . $e->getMessage();
		exit();
	} catch (\Facebook\Exceptions\FacebookSDKException $e) {
		echo "SDK Exception: " . $e->getMessage();
		exit();
	}

	if (!$accessToken) {
	    echo "No Response From Facebook";
		header('Location: index.php');
		exit();
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (!$accessToken->isLongLived())
		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

	$response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
	$userData = $response->getGraphNode()->asArray();

//    if (isset($_SESSION['g_access_token'])){
//        session_destroy();
//    }

	$_SESSION['id'] = $userData['id'];
	//$_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture']['url'];
    $_SESSION['first_name'] = $userData['first_name'];
    $_SESSION['last_name'] = $userData['last_name'];

	$_SESSION['fb_access_token'] = (string) $accessToken;

    // username encoding
    function base64url_encode($plainText) {
        $base64 = base64_encode($plainText);
        $base64url = strtr($base64, '+/=', '-_,');
        return $base64url;
    }
    $_SESSION['user'] = base64url_encode($userData['email']);



    $first_name = $userData['first_name'];
    $last_name = $userData['last_name'];
    $email = $userData['email'];
    $picture_url = $userData['picture']['url'];


    if($connection){
        $query1 = "SELECT email FROM user_tbl WHERE email = '{$email}'";

        $result1 = mysqli_query($connection,$query1);

        if(mysqli_num_rows($result1) <= 0){

            $query = "INSERT INTO user_tbl(first_name,last_name,email,picture_url,verification_status)";
            $query.= " VALUES('{$first_name}','{$last_name}','{$email}','{$picture_url}',1)";
            $result = mysqli_query($connection,$query) or die ("Query Failed" );
        }
    }

	header('Location: ../index.php');
	exit();
?>