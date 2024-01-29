<?php
session_start();
require_once("../../config/connect.php");

$getTitle=mysqli_real_escape_string($con,$_REQUEST["title"]);
$getFile=$_FILES["photo"];

$fileName=$getFile["name"];
$fName=time()."_".$fileName;
$fSize=floor($getFile['size']/1024)." KB";
$f_tmp_name=$getFile["tmp_name"];
$target="../uploads/photos/".$fName;

move_uploaded_file($f_tmp_name,$target);


$insertQuery ="INSERT INTO photos (title,img_name,photo_size) VALUES ('$getTitle','$fName','$fSize')";
$runInsertQuery=mysqli_query($con,$insertQuery);
if($runInsertQuery){
    $_SESSION["message"] = "Photo Added Successfully";
    header("location: ../photo_gallery.php");
}else{
    $_SESSION["message"] = "Something Went Wrong";
    header("location: ../photo_gallery.php");
}



?>