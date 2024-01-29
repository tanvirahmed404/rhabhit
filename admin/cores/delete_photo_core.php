<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["id"])){
$id=$_REQUEST["id"];
$photo = $_REQUEST["photo"];

$showData="SELECT * FROM photos WHERE photo_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $deleteQuery="DELETE FROM photos WHERE photo_id='$id'";
        $runDeleteQuery=mysqli_query($con,$deleteQuery);
        if($runDeleteQuery){
            unlink("../uploads/photos/$photo");
            $_SESSION["message"] = "Photo Deleted";
            header("location: ../photo_gallery.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../photo_gallery.php");
        }
        
    }
}

}

?>