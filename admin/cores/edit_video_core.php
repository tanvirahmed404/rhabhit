<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["edit-video-btn"])){
$id=$_REQUEST["id"];
$title=mysqli_real_escape_string($con,$_REQUEST["title"]);
$link=mysqli_real_escape_string($con,$_REQUEST["link"]);


$showData="SELECT * FROM videos WHERE video_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="UPDATE videos SET title='$title',link='$link' WHERE video_id='$id'";
        $runUpQuery=mysqli_query($con,$updateQuery);
        if($runUpQuery){
            $_SESSION["message"] = "Video Updated";
            header("location: ../video_gallery.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../video_gallery.php");
        }
        
    }
}

}

?>