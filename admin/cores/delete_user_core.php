<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["id"])){
$id=$_REQUEST["id"];

$showData="SELECT * FROM users WHERE user_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="DELETE FROM users WHERE user_id='$id'";
        $runDeleteQuery=mysqli_query($con,$updateQuery);
        if($runDeleteQuery){
            $_SESSION["message"] = "User Deleted";
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