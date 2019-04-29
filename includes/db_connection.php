<?php
define('BASE_URL','http://localhost/kabeli/');
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "";
$db["db_name"] = "kabeli_db";


foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$connection){
    echo "Database Connection Error";
}



?>