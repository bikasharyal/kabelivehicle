<?php

$servername="localhost";
$username="root";
$password="";

$connection= mysqli_connect($servername, $username, $password);

if(!$connection){
    die("Cannot connect with the server!! " .mysqli_connect_error());
}else{
    mysqli_select_db($connection,"kabeli_db")or die("database not selected");
}

?>