<?php
session_start();
if(isset($_SESSION["auth"])==true){
    unset($_SESSION["auth"]);
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_name"]);

    $_SESSION["message"] = "Logout Successfully!";
    header("location: login.php");
    exit(0);

}


?>