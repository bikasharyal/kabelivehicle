<?php
require_once "g_config.php";
$loginURL = $gClient->createAuthUrl();
header("Location:".$loginURL);