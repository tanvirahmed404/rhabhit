<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add User - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<?php
require_once("includes/header.php");
require_once("message.php");
?>
<h1 class="ms-2 mb-3"> Add User</h1>

<form action="cores/add_user_core.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="form-floating col-md-12 mb-3">
                <input required type="text" name="fname" class="form-control" id="floatingInput"
                    placeholder="Enter First Name Here">
                <label for="floatingInput" class="ps-4">First name</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required type="text" name="lname" class="form-control" id="floatingInput"
                    placeholder="Enter Last Name Here">
                <label for="floatingInput" class="ps-4">Last name</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required type="text" name="username" class="form-control" id="floatingInput"
                    placeholder="Enter Username Here">
                <label for="floatingInput" class="ps-4">Username</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required type="email" name="email" class="form-control" id="floatingInput"
                    placeholder="Enter Email Here">
                <label for="floatingInput" class="ps-4">Email Address</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required type="password" name="newPwd" class="form-control" id="floatingInput"
                    placeholder="Enter New Password Here">
                <label for="floatingInput" class="ps-4">New Password</label>
            </div>
            <div class="form-floating col-md-12 mb-3">
                <input required type="password" name="cfmPwd" class="form-control" id="floatingInput"
                    placeholder="Confirm Password Here">
                <label for="floatingInput" class="ps-4">Confirm Password</label>
            </div>

            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" name="add-user-btn" class="btn btn-primary" type="button">Add User</button>
            </div>
        </div>
    </div>
</form>

<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>