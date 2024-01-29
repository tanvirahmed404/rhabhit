<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["edit-result-btn"])){
$id=$_REQUEST["id"];

$title=mysqli_real_escape_string($con,$_REQUEST["title"]);
$editFile=$_FILES["editFile"];

$old_filename=$_REQUEST["old_filename"];
$fileName=$old_filename;

if ($editFile["error"]==0) {
    $fileName=time()."_".$editFile["name"];
    $f_tmp_name=$editFile["tmp_name"];
    $target="../uploads/result/".$fileName;
    $upFile = move_uploaded_file($f_tmp_name,$target);
}



$showData="SELECT * FROM results WHERE id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $updateQuery="UPDATE results SET title='$title',file_name='$fileName' WHERE id='$id'";
        $runUpQuery=mysqli_query($con,$updateQuery);
        if($runUpQuery){
            if($upFile){
                unlink("../uploads/result/".$old_filename);
            }
            $_SESSION["message"] = "Result Updated";
            header("location: ../all_result.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../all_result.php");
        }
        
    }
}

}

?>