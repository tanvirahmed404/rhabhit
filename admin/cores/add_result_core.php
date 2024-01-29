<?php
session_start();
require_once("../../config/connect.php");

$getTitle=mysqli_real_escape_string($con,$_REQUEST["title"]);
$getFile=$_FILES["inpfile"];

$fileName=$getFile["name"];
$fName=time()."_".$fileName;
$fSize=floor($getFile['size']/1024)." KB";
$f_tmp_name=$getFile["tmp_name"];
$target="../uploads/result/".$fName;
move_uploaded_file($f_tmp_name,$target);


$insertQuery ="INSERT INTO results (title,file_name) VALUES ('$getTitle','$fName')";
$runInsertQuery=mysqli_query($con,$insertQuery);
if($runInsertQuery){
    $_SESSION["message"] = "Result Added Successfully";
    header("location: ../all_result.php");
}else{
    $_SESSION["message"] = "Something Went Wrong";
    header("location: ../all_result.php");
}



?>