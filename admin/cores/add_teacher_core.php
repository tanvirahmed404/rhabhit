<?php
session_start();
require_once("../../config/connect.php");

$tName=mysqli_real_escape_string($con,$_REQUEST["tName"]);
$designation=mysqli_real_escape_string($con,$_REQUEST["designation"]);
$email=mysqli_real_escape_string($con,$_REQUEST["email"]);

        $insertQuery="INSERT INTO teachers (name,designation,email) VALUES ('$tName','$designation','$email')";
        $runInsertQuery=mysqli_query($con,$insertQuery);
        if($runInsertQuery==true){
                $_SESSION["message"] = "Teacher Added Successfully";
                header("location: ../add_teacher.php");
        
        }else{
            $_SESSION["message"] = "Something Went Wrong!";
            header("location: ../add_teacher.php");

        }


?>