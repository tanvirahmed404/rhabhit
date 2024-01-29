<?php
session_start();
require_once("../../config/connect.php");

$title=mysqli_real_escape_string($con,$_REQUEST["title"]);
$link=mysqli_real_escape_string($con,$_REQUEST["link"]);

        $insertQuery="INSERT INTO videos (title,link) VALUES ('$title','$link')";
        $runInsertQuery=mysqli_query($con,$insertQuery);
        if($runInsertQuery==true){
                $_SESSION["message"] = "Video Added Successfully";
                header("location: ../add_video.php");
        
        }else{
            $_SESSION["message"] = "Something Went Wrong!";
            header("location: ../add_video.php");

        }


?>