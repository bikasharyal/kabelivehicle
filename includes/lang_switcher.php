<?php
session_start();

if(!isset($_SESSION['lang'])){
    $_SESSION['lang']='en';

}elseif (isset($_GET['lang'])&& !empty($_GET['lang']) && $_GET['lang']!=$_SESSION['lang']){

    if ($_GET['lang']=="en"){
        $_SESSION['lang']= "en";

    }elseif ($_GET['lang']=="es"){
        $_SESSION['lang']= "es";

    }else{
        $_SESSION['lang']= "en";

    }

}elseif (isset($_GET['lang'])&& $_GET['lang']==$_SESSION['lang']){
    //do nothing
}else{
    $_SESSION['lang']= "en";

}

require_once 'languages/'.$_SESSION['lang'].'.php';





//elseif(!isset($_GET['lang'])){
//    header('Location: index/lang=us');
//}


?>