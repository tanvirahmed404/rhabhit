<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["change-pwd-btn"])){

    if(isset($_SESSION["auth"])==true){
        $id= $_SESSION["auth_user"]["user_id"];
    }


$oldPwd=mysqli_real_escape_string($con,$_REQUEST["oldPwd"]);
$newPwd=mysqli_real_escape_string($con,$_REQUEST["newPwd"]);
$cmfPwd=mysqli_real_escape_string($con,$_REQUEST["cmfPwd"]);

$showData="SELECT * FROM users WHERE user_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
while($data=mysqli_fetch_array($runQuery)){
    $old_db_pwd =  $data["user_pwd"];
    if($old_db_pwd===$oldPwd){

        if($newPwd===$cmfPwd){
                    $updateQuery="UPDATE users SET user_pwd='$newPwd' WHERE user_id='$id'";
                    $runUpQuery=mysqli_query($con,$updateQuery);
                    if($runUpQuery){
                        $_SESSION["message"] = "Password Changed Successfully";
                        header("location: ../change_pwd.php");
                    }
                    else{
                        $_SESSION["message"] = "Something Went Wrong";
                        header("location: ../change_pwd.php");
                    }
                
        }else{
            $_SESSION["message"] = "New Password and Confirm Password doesn't match";
            header("location: ../change_pwd.php");
        }



        echo "macth";
    }else{
        $_SESSION["message"] = "Old Password is Wrong";
        header("location: ../change_pwd.php");
    }
}





}

?>