<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["id"])){
$id=$_REQUEST["id"];

$showData="SELECT * FROM videos WHERE video_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="DELETE FROM videos WHERE video_id='$id'";
        $runDeleteQuery=mysqli_query($con,$updateQuery);
        if($runDeleteQuery){
            $_SESSION["message"] = "Video Deleted";
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