<?php
$navItems = array(
    array(
        'tlink' => "index.php",
        'title' => "Casa"
    ),
    array(
        'tlink' => "about.php",
        'title' => "Acerca de"
    ),
    array(
        'tlink' => "vehicles.php",
        'title' => "Vehículos"
    ),

    array(
        'tlink' => "contact.php",
        'title' => "Contáctenos"
    ),
);

$lang= array(
    "title" => "Kabeli Inquilinos",
    "login" => "El Login",
    "logout" => "Cerrar Sesión",
    "register" => "El Registro",
    "home_pic_floater" => "Déjanos llevarte lejos",
    "vehicle_search" => "Busca tu Viaje",
    "search_submit" => "Encuentra tu viaje",

    "pickup_city" => "Ciudad de Recogida",
    "pickup_date" => "Fecha de Recogida",
    "pickup_time" => "Hora de Recogida",

    "drop_off_city" => "Ciudad de Entrega",
    "drop_off_date" => "Fecha de Entrega",
    "drop_off_time" => "Hora de Entrega",
    "passenger_count" => "Recuento de Pasajeros",
    "vehicle_type" => "Vehículo type",

    "package_subtitle" => "encuentra tu mejor traje",
    "package_title" => "Paquetes de Vehículos Populares",
    "special_offer" => "Oferta Especial",


    "call_us" => "llamanos",
    "office_landline" => "Oficina",
    "mobile" => "Móvil",
    "come_drop_by" => "ven y visita",
    "send_us_message" => "mandanos un mensaje",

    "vehicle_subtitle" => "Haz tu viaje perfecto con",
    "vehicle_title" => "Nuestros Increíbles Vehículos",


);
foreach($lang as $key => $value){
    define($key,$value);
}