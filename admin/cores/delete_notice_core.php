<?php
session_start();
require_once("../../config/connect.php");
if(isset($_REQUEST["id"])){
$id=$_REQUEST["id"];
$uploaded_file=$_REQUEST["file"];

$showData="SELECT * FROM notices WHERE notice_id='$id'";
$runQuery=mysqli_query($con,$showData) or die("Show Query Error");
if($runQuery==true){
    if(mysqli_num_rows($runQuery)>0){
        $deleteQuery="DELETE FROM notices WHERE notice_id='$id'";
        $runDeleteQuery=mysqli_query($con,$deleteQuery);
        if($runDeleteQuery){
            unlink("../uploads/notices/$uploaded_file");
            $_SESSION["message"] = "Notice Deleted";
            header("location: ../all_notices.php");
        }
        else{
            $_SESSION["message"] = "Something Went Wrong";
            header("location: ../all_notices.php");
        }
        
    }
}

}

?>