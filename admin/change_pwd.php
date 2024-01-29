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
    <title>Change Password - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<?php
require_once("includes/header.php");
require_once("message.php");
?>
<h1 class="ms-2 mb-3">Change Password</h1>

<form action="cores/change_pwd_core.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="form-floating col-md-12 mb-3">
                <input required id="myInput" type="password" name="oldPwd" class="form-control" id="floatingInput"
                    placeholder="Enter Old Password Here">
                <label for="floatingInput" class="ps-4">Old Password</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required id="myInput1" type="password" name="newPwd" class="form-control" id="floatingInput"
                    placeholder="Enter New Password Here">
                <label for="floatingInput" class="ps-4">New Password</label>
            </div>
            <div class="form-floating col-md-12 mb-3">
                <input required id="myInput2" type="password" name="cmfPwd" class="form-control" id="floatingInput"
                    placeholder="Confirm Password Here">
                <label for="floatingInput" class="ps-4">Confirm Password</label>
            </div>

            <div class="form-check ms-3 mb-3 col-6">
                <input class="form-check-input" onclick="myFunction();" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Show Password
                </label>
            </div>

            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" name="change-pwd-btn" class="btn btn-primary" type="button">Change
                    Password</button>
            </div>
        </div>
    </div>
</form>


<script>
function myFunction() {
    var x = document.getElementById("myInput");
    var y = document.getElementById("myInput1");
    var z = document.getElementById("myInput2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }

    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }

    if (z.type === "password") {
        z.type = "text";
    } else {
        z.type = "password";
    }
}
</script>

<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>