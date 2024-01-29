<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["edit-teacher-btn"])){
$id=$_REQUEST["id"];
$name=mysqli_real_escape_string($con,$_REQUEST["name"]);
$designation=mysqli_real_escape_string($con,$_REQUEST["designation"]);
$email=mysqli_real_escape_string($con,$_REQUEST["email"]);


$showData="SELECT * FROM teachers WHERE id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="UPDATE teachers SET name='$name',designation='$designation',email='$email' WHERE id='$id'";
        $runUpQuery=mysqli_query($con,$updateQuery);
        if($runUpQuery){
            $_SESSION["message"] = "Teacher Updated";
            header("location: ../all_teachers.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../all_teachers.php");
        }
        
    }
}

}

?>