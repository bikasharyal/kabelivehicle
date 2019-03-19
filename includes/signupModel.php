<?php
require_once './dbconnect.php';

if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
}

$query = "INSERT INTO `usertable`(`First Name`,`Last Name`,`Username`,`Password`) VALUES ('$firstname','$lastname','$username','$password')";

$result = mysqli_query($connection,$query) or die ("Query Failed" );
if($result){
    echo "Registration Successfully";
    header("Location:http://localhost/myPractice/loginForm.php?");

}else{
    echo "Registration Failed!";
}

?>