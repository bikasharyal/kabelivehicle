<?php

if(isset($_POST['search_submit'])){

    $vt = $_POST['vehicle_type'];
    $c= $_POST['passenger_count'];

   header("Location:../vehicles.php?count={$c}&vt={$vt}");

}

?>
