<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["add-user-btn"])){
$fname=mysqli_real_escape_string($con,$_REQUEST["fname"]);
$lname=mysqli_real_escape_string($con,$_REQUEST["lname"]);
$username=mysqli_real_escape_string($con,$_REQUEST["username"]);
$email=mysqli_real_escape_string($con,$_REQUEST["email"]);
$newPwd=mysqli_real_escape_string($con,$_REQUEST["newPwd"]);
$cfmPwd=mysqli_real_escape_string($con,$_REQUEST["cfmPwd"]);


if($newPwd===$cfmPwd){


$showData="SELECT * FROM users WHERE username='$username'";
$runQuery=mysqli_query($con,$showData);
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $_SESSION["message"] = "Username already existed";
        header("location: ../add_user.php");
    }else{
        $insertQuery="INSERT INTO users (fname,lname,username,email,user_pwd) VALUES ('$fname','$lname','$username','$email','$newPwd')";
        $runInsertQuery=mysqli_query($con,$insertQuery);
        if($runInsertQuery==true){
                $_SESSION["message"] = "User Added Successfully";
                header("location: ../add_user.php");
        
        }
    }

        
}else{
    $_SESSION["message"] = "Check Query Error";
}


}
else{
    $_SESSION["message"] = "New Password & Confirm Password not match";
    header("location: ../add_user.php");
}
}

?>