<?php
	session_start();

	require_once "../lib/FacebookAPI/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '294148051211874',
		'app_secret' => '9ec7145dc6e3802aa980db048a48e4bc',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>