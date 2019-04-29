<?php
session_start();
$_SESSION['admin_token']=null;
header("Location: ../");