<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["edit-photo-btn"])){
$id=$_REQUEST["id"];
$title=mysqli_real_escape_string($con,$_REQUEST["title"]);
$editFile=$_FILES["editFile"];

$old_photo=$_REQUEST["old_photo"];
$filename=$old_photo;



if($editFile["error"]==0){
    $filename=time()."_".$editFile["name"];
    $fSize=floor($editFile['size']/1024)." KB";
    $pic_tmp_name=$editFile["tmp_name"];
    $target="../uploads/photos/".$filename;
    $upfile = move_uploaded_file($pic_tmp_name,$target);
}
        


$showData="SELECT * FROM photos WHERE photo_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="UPDATE photos SET title='$title',img_name='$filename',photo_size='$fSize' WHERE photo_id='$id'";
        $runUpQuery=mysqli_query($con,$updateQuery);
        if($runUpQuery){
            if($upfile){
                unlink("../uploads/photos/".$old_photo);
            }
            
            $_SESSION["message"] = "Photo Updated";
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