<?php 
session_start();
if(!isset($_SESSION["auth"])){
    $_SESSION["message"] = "Loggin First";
    header("location: login.php");
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>



<?php
require_once("includes/header.php");
?>

<?php
require_once("message.php");
?>

<h1 class="ms-2 mb-3"> Dashboard</h1>
<div class="container">
    <div class="row">

        <?php

$showUser="SELECT * FROM notices";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$notice_count=mysqli_num_rows($runShowUserQuery);
        
?>



        <div class="col-md-3">
            <div class="card-counter primary">
                <i class="fa fa-bell"></i>
                <span class="count-numbers"><?php echo $notice_count ?></span>
                <a href="./all_notices.php" style="color:#fff;"> <span class="count-name">Notices</span></a>
            </div>
        </div>
        <?php
}
?>



        <?php

$showUser="SELECT * FROM results";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$notice_count=mysqli_num_rows($runShowUserQuery);
        
?>



        <div class="col-md-3">
            <div class="card-counter" style="background:#002F49;color:#fff">
                <i class="fa-solid fa-chart-line"></i>
                <span class="count-numbers"><?php echo $notice_count ?></span>
                <a href="./all_result.php" style="color:#fff;"> <span class="count-name">Result</span></a>
            </div>
        </div>
        <?php
}
?>







        <?php

$showUser="SELECT * FROM photos";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$photo_count=mysqli_num_rows($runShowUserQuery);
        
?>

        <div class="col-md-3">
            <div class="card-counter danger">
                <i class="fa-solid fa-image"></i>
                <span class="count-numbers"><?php echo $photo_count ?></span>
                <a href="./photo_gallery.php" style="color:#fff;"> <span class="count-name">Photos</span></a>
            </div>
        </div>
        <?php
}
?>




        <?php

$showUser="SELECT * FROM videos";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$video_count=mysqli_num_rows($runShowUserQuery);
        
?>



        <div class="col-md-3">
            <div class="card-counter success">
                <i class="fa-solid fa-video"></i>
                <span class="count-numbers"><?php echo $video_count ?></span>
                <a href="./video_gallery.php" style="color:#fff;"> <span class="count-name">Videos</span></a>
            </div>
        </div>
        <?php
}
?>

        <?php

$showUser="SELECT * FROM teachers";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$teacher_count=mysqli_num_rows($runShowUserQuery);
        
?>

        <div class="col-md-3">
            <div class="card-counter dark" style="background:#ffc107;color:#fff">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span class="count-numbers"><?php echo $teacher_count; ?></span>
                <a href="./all_teachers.php" style="color:#fff;"> <span class="count-name">Teachers</span></a>
            </div>
        </div>

        <?php
}
?>


        <?php

$showUser="SELECT * FROM users";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
$user_count=mysqli_num_rows($runShowUserQuery);
        
?>
        <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa fa-users"></i>
                <span class="count-numbers"><?php echo $user_count; ?></span>
                <a href="./all_users.php" style="color:#fff;"> <span class="count-name">Users</span></a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>