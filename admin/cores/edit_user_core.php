<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["edit-user-btn"])){
$id=$_REQUEST["id"];
$fname=mysqli_real_escape_string($con,$_REQUEST["fname"]);
$lname=mysqli_real_escape_string($con,$_REQUEST["lname"]);
$email=mysqli_real_escape_string($con,$_REQUEST["email"]);


$showData="SELECT * FROM users WHERE user_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="UPDATE users SET fname='$fname',lname='$lname',email='$email' WHERE user_id='$id'";
        $runUpQuery=mysqli_query($con,$updateQuery);
        if($runUpQuery){
            $_SESSION["message"] = "User Updated";
            header("location: ../all_users.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../all_users.php");
        }
        
    }
}

}

?>